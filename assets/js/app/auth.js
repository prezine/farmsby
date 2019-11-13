// Initializing a class definition
class Auth {
    constructor(url) {
        this.url = url;
    }
    // login constructor
    login(jsonData) {
        return `${this.url} says hello.`;
    }
    // sign-up constructor
    join(jsonData) {
    	this.ajaxSender('POST', jsonData);
    }
    // sign-up constructor
    ajaxSender(method, jsonData) {
	    $.ajax({
	        url : `${this.url}`,
	        type : method,
	        dataType: 'JSON',
            contentType: 'application/json',
            data : jsonData,
	        cache: false,
	        success: function (res) {
                if (res == 200) {
    			    showSwal('joined');
                }
	        	console.log(res);
	        },
	        error: function (request, status, error) {
	           console.log(status, error);
	        }
	    });
    }
}