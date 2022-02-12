<script>



function validatorSetup(block, message="Please add this statement into setup!") {
  var type = block.getRootBlock().type
  if (type === 'setup') {
    block.setWarningText(null);
    return true;
  } else {
    block.setWarningText(message);
    return false;
  }
}


function validatorForever(block, message="Please add this statement into forever!") {
  var type = block.getRootBlock().type
  if (type === 'forever') {
    block.setWarningText(null);
    return true;
  } else {
    block.setWarningText(message);
    return false;
  }
}

function validatorServerOn(block, message="Please add this statement into server on event!") {
  var type = block.getRootBlock().type
  if (type === 'server_on') {
    block.setWarningText(null);
    return true;
  } else {
    block.setWarningText(message);
    return false;
  }
}

function validatorSetupForever(block, message="Please add this statement into setup or forever!") {
  var type = block.getRootBlock().type
  if (type === 'forever' || type === 'setup') {
    block.setWarningText(null);
    return true;
  } else {
    block.setWarningText(message);
    return false;
  }
}


function validatorEmpty(block, value, message="Please complete this block with the appropriate value.") {
  if (value) {
    block.setWarningText(null);
    return true;
  } else {
    block.setWarningText(message);
    return false;
  }
}


function validatorFunction(block, message="Please add this statement into procedure with return value!") {
  var type = block.getRootBlock().type
  if (type === 'procedures_defreturn') {
    block.setWarningText(null);
    return true;
  } else {
    block.setWarningText(message);
    return false;
  }
}


function validatorAll(block, message="Please add this statement into setup, forever or functions!") {
  var type = block.getRootBlock().type
  if (type === 'forever' || type === 'setup' || type === 'procedures_defreturn') {
    block.setWarningText(null);
    return true;
  } else {
    block.setWarningText(message);
    return false;
  }
}




/**
 * For development content docs!
 */

// function validatorSetup(block, message="Please add this statement into setup!") {
//   var type = block.getRootBlock().type
//   if (type === 'setup') {
//     // block.setWarningText(null);
//     return true;
//   } else {
//     // block.setWarningText(message);
//     return false;
//   }
// }


// function validatorForever(block, message="Please add this statement into forever!") {
//   var type = block.getRootBlock().type
//   if (type === 'forever') {
//     // block.setWarningText(null);
//     return true;
//   } else {
//     // block.setWarningText(message);
//     return false;
//   }
// }


// function validatorSetupForever(block, message="Please add this statement into setup or forever!") {
//   var type = block.getRootBlock().type
//   if (type === 'forever' || type === 'setup') {
//     // block.setWarningText(null);
//     return true;
//   } else {
//     // block.setWarningText(message);
//     return false;
//   }
// }


// function validatorEmpty(block, value, message="Please complete this block with the appropriate value.") {
//   if (value) {
//     // block.setWarningText(null);
//     return true;
//   } else {
//     // block.setWarningText(message);
//     return false;
//   }
// }


// function validatorFunction(block, message="Please add this statement into procedure with return value!") {
//   var type = block.getRootBlock().type
//   if (type === 'procedures_defreturn') {
//     // block.setWarningText(null);
//     return true;
//   } else {
//     // block.setWarningText(message);
//     return false;
//   }
// }


// function validatorAll(block, message="Please add this statement into setup, forever or functions!") {
//   var type = block.getRootBlock().type
//   if (type === 'forever' || type === 'setup' || type === 'procedures_defreturn') {
//     // block.setWarningText(null);
//     return true;
//   } else {
//     // block.setWarningText(message);
//     return false;
//   }
// }
</script>