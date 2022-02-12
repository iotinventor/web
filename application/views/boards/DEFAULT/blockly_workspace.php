
<script>
var blocklyArea = document.getElementById("blocklyArea");
var blocklyDiv = document.getElementById("blocklyDiv");
var linkConnect = document.getElementById("linkConnect");
var linkSave = document.getElementById("linkSave");
var pCode = document.getElementById("pCode");


var blocklyWorkspace = Blockly.inject(
  'blocklyDiv', {
    media: '<?= site_url('assets/blockly/blockly/media/'); ?>',
    toolbox: document.getElementById("toolbox"),
    scroll: true,
    grid:
         {spacing: 17,
          length: 1,
          colour: '#888',
          // colour: '#fff',
          snap: true},
    zoom:
    {controls: true,
    wheel: true,
    startScale: 1.0,
    maxScale: 3,
    minScale: 0.3,
    scaleSpeed: 1.2,
    pinch: true},
     trashcan: false,
  }
);


var onresize = function(e) {
  var element = blocklyArea;
  var x = 0;
  var y = 0;
  do {
    x += element.offsetLeft;
    y += element.offsetTop;
    element = element.offsetParent;
  } while (element);
  blocklyDiv.style.left = x + 'px';
  blocklyDiv.style.top = y + 'px';
  blocklyDiv.style.width = blocklyArea.offsetWidth + 'px';
  blocklyDiv.style.height = blocklyArea.offsetHeight + 'px';
  Blockly.svgResize(blocklyWorkspace);
};

window.addEventListener('resize', onresize, false);
onresize();

Blockly.svgResize(blocklyWorkspace);


blocklyWorkspace.addChangeListener(function (event) {  
  var code = Blockly.Arduino.workspaceToCode(blocklyWorkspace);
  var xml = Blockly.Xml.workspaceToDom(blocklyWorkspace);
  var xml_text = Blockly.Xml.domToText(xml);
  localStorage.setItem("code", xml_text);

  console.log(code);
  

  var xml_latest = <?= $project->block ? $project->block:''; ?>;

  if ( xml_latest !== xml_text ) {
    linkSave.innerHTML = `<span class="spinner-grow text-primary spinner-grow-sm" role="status" aria-hidden="true"></span> <i class="bi bi-save2"></i>`;
    linkConnect.removeAttribute('data-bs-toggle');
    linkConnect.removeAttribute('data-bs-target');
  } else {
    linkConnect.setAttribute('data-bs-toggle', 'modal');
    linkConnect.setAttribute('data-bs-target', '#modalCompile'); 
  }
});


window.onload = function () {
  var xml_text = <?= $project->block; ?>;
  if (xml_text) {
    var xml = Blockly.Xml.textToDom(xml_text);
    Blockly.Xml.domToWorkspace(blocklyWorkspace, xml);
    localStorage.setItem('code', xml_text);
    var native = Blockly.Arduino.workspaceToCode(blocklyWorkspace);
    localStorage.setItem('native', native);
    pCode.value = "<?= $project->code; ?>";
  }
}

function report() {
  
}


function save() {
  var block =  localStorage.getItem('code');
  var xml_latest = <?= $project->block ? $project->block:''; ?>;
  
  if ( block !== xml_latest )
  {
    
    var id = "<?= $project->id; ?>";
    var native = Blockly.Arduino.workspaceToCode(blocklyWorkspace);

    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        linkSave.innerHTML = `<i class="bi bi-save2"></i>`;
        linkConnect.setAttribute('data-bs-toggle', 'modal');
        linkConnect.setAttribute('data-bs-target', '#modalCompile'); 
        console.log(this.response);
        pCode.value = JSON.parse(this.response).code;
      }
    };

    xhttp.open("POST", "<?= site_url('project/update'); ?>", true);
    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhttp.send(`id=${id}&native=${encodeURIComponent(native)}&block=${block}`);
  }
  
}


</script>