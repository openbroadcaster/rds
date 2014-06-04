

/*

eventUtility is  set of event tool to add or remove event from element
and is a cross browser. I will use this to add event to different element
in the User interface for the RDS module 

Emil Imrith
May 16 - 2014


*/


var eventUtility = {
    addEvent : function(el, type, fn) {
        if (typeof addEventListener !== "undefined") {
            el.addEventListener(type, fn, false);
        } else if (typeof attachEvent !== "undefined") {
            el.attachEvent("on" + type, fn);
        } else {
            el["on" + type] = fn;
        }
    },
    
    removeEvent : function(el, type, fn) {
        if (typeof removeEventListener !== "undefined") {
            el.removeEventListener(type, fn, false);
        } else if (typeof detachEvent !== "undefined") {
            el.detachEvent("on" + type, fn);
        } else {
            el["on" + type] = null;
        }
    },
    
    getTarget : function(event) {
        if (typeof event.target !== "undefined") {
            return event.target;
        } else {
            return event.srcElement;
        }
    },
    
    preventDefault : function(event) {
        if (typeof event.preventDefault !== "undefined") {
            event.preventDefault();
        } else {
            event.returnValue = false;
        }
    }
};