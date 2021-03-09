function isTName(tname){
	var flag = tname.search(/^[0-9a-zA-Z_\-]{4,20}$/);
	if (flag == -1) {
		alert("请输入正确格式的用户名:4-20个字符,由字母数字下划线组成.");
		document.getElementById('tname').focus();					
		return false;
	}
}

function isTEmail(temail) {
    var flag =temail.search(/^\w+((-\w+)|(\.\w+))*\@[A-Za-z0-9]+((\.|-)[A-Za-z0-9]+)*\.[A-Za-z0-9]+$/);
    if (flag == -1){
        alert("请输入正确格式的邮箱账号.");
        document.getElementById('temail').focus();
        return false;
    }
}

function isTPassword(tpassword){
	var flag = tpassword.search(/^(\w){6,20}$/);
	if (flag == -1) {
		alert("请输入正确格式的密码:只能输入6-20个字母、数字、下划线.");
		document.getElementById('tpassword').focus();
		return false;
	}
}

function isTRePassword(trepassword) {

	var p1=document.msform.tpassword.value;//获取密码框的值
	var p2=document.msform.trepassword.value;//获取重新输入的密码值 
	if (p1 != p2){
		alert("确认密码跟原密码不同!")
		document.getElementById('trepassword').focus();
		return false;
	}
}


function isTPhone(tphone){
    var RegCellPhone = /^(1)([0-9]{10})?$/;
    var  falg=tphone.search(RegCellPhone);
    if (falg==-1){
        alert("请输入正确格式的手机号.");
        document.getElementById('tphone').focus();
        return false;

    }
    
}
