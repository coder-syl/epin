export function setCookie(c_name, value, c_usertype, usertype, expire) {
    var date = new Date();
    date.setSeconds(date.getSeconds() + expire);
    document.cookie =c_name + "=" + escape(value) +';';
    document.cookie =  c_usertype + "=" +usertype + "; expires=" + date.toGMTString();
    console.log(c_usertype + usertype);
    console.log(document.cookie);
}

/*获取cookie*/
// export function getCookie(c_name) {
//     if (document.cookie.length > 0) {
//         let c_start = document.cookie.indexOf(c_name + "=");
//         if (c_start != -1) {
//             c_start = c_start + c_name.length + 1;
//             let c_end = document.cookie.indexOf("; ", c_start);
//             if (c_end == -1) c_end = document.cookie.length;
//             return unescape(document.cookie.substring(c_start, c_end));
//         }
//     }
//     return "";
// }

export function getCookie(c_name) {
    if (document.cookie.length > 0) {
        var name = c_name+ "=";
        var ca = document.cookie.split('; ');
        for (var i = 0; i < ca.length; i++) {
            var c = ca[i].trim();
            if (c.indexOf(name) == 0) {
                return c.substring(name.length, c.length);
            }
        }
    }
    return "";
}

/*删除cookie*/
export function delCookie(c_name, c_usertype) {
    setCookie(c_name, "", c_usertype, "", -1);
}
