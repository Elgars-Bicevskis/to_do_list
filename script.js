function my_fun(j){
//check if checkbox is checked and cross out task
  if(document.getElementById("ckb").checked){

  document.getElementById("check_task").style.textDecoration="line-through";

  }else{

  document.getElementById("check_task").style.textDecoration="none";

  }

  }
