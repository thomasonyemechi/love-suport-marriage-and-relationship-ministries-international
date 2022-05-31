const validateEmail = (email) => {
    return email.match(
        /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/
    );
};


function concatError(error) {
    error_text = '';
    if (!error) {
        error_text = 'Error processing request, Pls try again';
    } else if (error.message) {
        error_text = error.message;
    } else if (error.errors) {
        errs = error.errors;
        errs.forEach(err => {
            error_text += err + '<br>'
        });
    } else {
        error_text = 'Error, Processing Request'
    }
    return error_text;
}