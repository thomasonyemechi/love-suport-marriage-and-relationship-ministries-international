const validateEmail = (email) => {
    return email.match(
        /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/
    );
};



function salat(msg, t = 0) {
    color = (t == 1) ? 'danger' : 'success';
    icon = (t == 1) ? 'ban' : 'checked';
    ret = `
        <div class="alert bg-${color}" style="position:fixed; top:55px; right:15px; z-index:9999999999999999">
            <i class="icon fe fe-${color}  text-white"> ${msg}  </i>
        </div>
    `
    alat = $('.littleAlert');
    alat.fadeIn();
    alat.html(ret);

    setTimeout(function() {
        alat.fadeOut();
    }, 3000);
}

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

    salat(error_text, 1)
    return error_text;
}

function btn(selector, btn_text, moment) {
    if (typeof(selector) == 'object') { selector = selector; } else { selector = $(selector); }
    if (moment == 'before') {
        selector.attr('disabled', 'disabled');
        selector.html(`<span class="spinner-border spinner-border-sm" aria-hidden="true"></span> <i>processing request ... </i>`);
    } else if (moment == 'after') {
        selector.removeAttr('disabled');
        selector.html(btn_text);
    }
}



function dropPaginatedPages(links) {
    link_txt = ''
    links.forEach(link => {
        link_txt += ` <li class = "page-item goToList ${ (link.active == true) ? 'active' :''}"data - data = '${JSON.stringify(link)}' >
        <a href = "?page=${link.label}"class = "page-link" > ${ link.label } </a></li > `;
    });

    body = ` <div class = "d-flex justify-content-center mt-3 mb-3" >
        <div class = "card-tools" >
        <ul class = "pagination" >${ link_txt }</ul> </div> </div>
    `
    return (links.length > 3) ? body : '';
}


function formatDate(date) {
    var d = new Date(date),
        month = '' + (d.getMonth() + 1),
        day = '' + d.getDate(),
        year = d.getFullYear();
    const monthNames = ["Jan", "Feb", "Mar", "Apr", "May", "Jun",
        "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"
    ];


    return `${day} ${monthNames[month - 1]}, ${year}`;
}


function delivery(sn) {
    return (sn == 1) ? 'Online' : 'Others';
}

function type(tp) {
    val = 'Text';
    if (tp == 1) { val = 'Audio'; } else if (tp == 2) { val = 'Video'; }

    return val;
}

const money = (num) => {
    var numb = new Intl.NumberFormat();
    return '$ ' + numb.format(num);
}