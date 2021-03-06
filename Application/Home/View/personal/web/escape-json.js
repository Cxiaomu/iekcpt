var repObj = {
    "<": "&lt;",
    ">": "&gt;",
    '"': "&quot;",
    "'": "&apos;",
    "&": "&amp;",
    "/": "&#x2F;"
};
function getType(obj){
    return Object.prototype.toString.call(obj).replace(/\[object\s|\]/g,'').toLowerCase()
};
function escapeHtml(str) {
    str = str === null ? '' : str;
    return str.replace(/[\<\>\'\"\&]/g, function (a, i) {
        return repObj[a]
    });
}

function escapeObjValue(obj) {
    Object.keys(obj).forEach(function (key) {
        if (typeof obj[key] == 'string') {
            obj[key] = escapeHtml(obj[key]);
        } else if (getType(obj[key]) == 'object') {
            escapeObjValue(obj[key]);
        } else if (getType(obj[key]) == 'array') {
            escapeArray(obj[key]);
        }
    });
    return obj;
}

function escapeArray(arr) {
    arr.map(function (value) {
        return escapeData(value);
    });
    return arr;
}

function escapeData(data) {
    if (typeof data == 'string') {
        return escapeHtml(data);
    } else if (getType(data) == 'object') {
        return escapeObjValue(data);
    } else if (getType(data) == 'array') {
        return escapeArray(data);
    }else{
        return data;
    }
}