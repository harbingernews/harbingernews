/*!
* Jasny-bootstrap.js by @ArnoldDaniels
* Copyright 2012 Arnold Daniels
* http://www.apache.org/licenses/LICENSE-2.0.txt
*/
!function(a){"use strict";var b=function(b,c){this.$element=a(b),this.options=a.extend({},a.fn.typeahead.defaults,c),this.options.target&&(this.$target=a(this.options.target)),this.matcher=this.options.matcher||this.matcher,this.sorter=this.options.sorter||this.sorter,this.highlighter=this.options.highlighter||this.highlighter,this.updater=this.options.updater||this.updater,this.source=this.options.source,this.strict=this.options.strict,this.$menu=a(this.options.menu),this.shown=!1,typeof this.source=="string"&&(this.url=this.source,this.source=this.searchAjax),b.nodeName=="SELECT"&&this.replaceSelect(),this.text=this.$element.val(),this.$element.attr("data-text",this.value).attr("autocomplete","off"),typeof this.$target!="undefined"?this.$element.attr("data-value",this.$target.val()):typeof this.$element.attr("data-value")=="undefined"&&this.$element.attr("data-value",this.strict?"":this.value),this.$menu.css("min-width",this.$element.width()+12),this.listen()};b.prototype={constructor:b,replaceSelect:function(){this.$target=this.$element,this.$element=a('<input type="text" />'),this.source={},this.strict=!0;var b=this.$target.find("option"),c;for(var d=0;d<b.length;d++){c=a(b[d]);if(c.val()===""){this.$element.attr("placeholder",c.html());continue}this.source[c.val()]=c.html(),this.$target.val()==c.val()&&this.$element.val(c.html())}var f=this.$target[0].attributes;for(d=0;d<f.length;d++)f[d].nodeName!="type"&&f[d].nodeName!="name"&&f[d].nodeName!="id"&&f[d].nodeName!="data-provide"&&!f[d].nodeName.match(/^on/)&&this.$element.attr(f[d].nodeName,f[d].nodeValue);this.$element.insertAfter(this.$target),this.$target.attr("autofocus")&&this.$element.trigger("focus").select(),this.$target.attr("autofocus",!1),this.$target.hide()},destroyReplacement:function(){typeof this.$target!="undefined"&&this.$target[0].nodeName=="SELECT"&&this.$element.replaceWith("")},select:function(){var a=this.$menu.find(".active"),b=a.attr("data-value"),c=a.find(".item-text").length>0?a.find(".item-text").text():a.text();return b=this.updater(b,"value"),c=this.updater(c,"text"),this.$element.val(c).attr("data-value",b),this.text=c,typeof this.$target!="undefined"&&this.$target.val(b).trigger("change"),this.$element.trigger("change"),this.hide()},updater:function(a,b){return a},show:function(){var b=a.extend({},this.$element.position(),{height:this.$element[0].offsetHeight});return this.$menu.insertAfter(this.$element).css({top:b.top+b.height,left:b.left}).show(),this.shown=!0,this},hide:function(){return this.$menu.hide(),this.shown=!1,this},lookup:function(b){var c;return this.query=this.$element.val(),!this.query||this.query.length<this.options.minLength?this.shown?this.hide():this:(c=a.isFunction(this.source)?this.source(this.query,a.proxy(this.process,this)):this.source,c?this.process(c):this)},process:function(b){return a.isArray(b)?this.processArray(b):this.processObject(b)},processArray:function(b){var c=this;return b=a.grep(b,function(a){return c.matcher(a)}),b=this.sorter(b),b.length?this.render(b.slice(0,this.options.items)).show():this.shown?this.hide():this},processObject:function(b){var c=this,d={},f=0;return a.each(b,function(a,b){c.matcher(b)&&(d[a]=b)}),d=this.sorter(d),a.isEmptyObject(d)?this.shown?this.hide():this:(a.each(d,function(a,b){f++>=c.options.items&&delete d[a]}),this.render(d).show())},searchAjax:function(b,c){var d=this;this.ajaxTimeout&&clearTimeout(this.ajaxTimeout),this.ajaxTimeout=setTimeout(function(){d.ajaxTimeout&&clearTimeout(d.ajaxTimeout);if(b===""){d.hide();return}a.get(d.url,{q:b,limit:d.options.items},function(a){typeof a=="string"&&(a=JSON.parse(a)),c(a)})},this.options.ajaxdelay)},matcher:function(a){return~a.toLowerCase().indexOf(this.query.toLowerCase())},sorter:function(b){return a.isArray(b)?this.sortArray(b):this.sortObject(b)},sortArray:function(a){var b=[],c=[],d=[],e;while(e=a.shift())e.toLowerCase().indexOf(this.query.toLowerCase())?~e.indexOf(this.query)?c.push(e):d.push(e):b.push(e);return b.concat(c,d)},sortObject:function(a){var b={},c;for(c in a)a[c].toLowerCase().indexOf(this.query.toLowerCase())||(b[c]=a[c],delete a[c]);for(c in a)~a[c].indexOf(this.query)&&(b[c]=a[c],delete a[c]);for(c in a)b[c]=a[c];return b},highlighter:function(a){var b=this.query.replace(/[\-\[\]{}()*+?.,\\\^$|#\s]/g,"\\$&");return a.replace(new RegExp("("+b+")","ig"),function(a,b){return"<strong>"+b+"</strong>"})},render:function(b){var c=this,d=a([]);return a.map(b,function(f,g){if(d.length>=c.options.items)return;var h,i;a.isArray(b)&&(g=f),h=a(c.options.item),i=h.find("a").length?h.find("a"):h,i.html(c.highlighter(f)),h.attr("data-value",g),h.find("a").length===0&&h.addClass("dropdown-header"),d.push(h[0])}),d.not(".dropdown-header").first().addClass("active"),this.$menu.html(d),this},next:function(b){var c=this.$menu.find(".active").removeClass("active"),d=c.nextAll("li:not(.dropdown-header)").first();d.length||(d=a(this.$menu.find("li:not(.dropdown-header)")[0])),d.addClass("active")},prev:function(a){var b=this.$menu.find(".active").removeClass("active"),c=b.prevAll("li:not(.dropdown-header)").first();c.length||(c=this.$menu.find("li:not(.dropdown-header)").last()),c.addClass("active")},listen:function(){this.$element.on("focus",a.proxy(this.focus,this)).on("blur",a.proxy(this.blur,this)).on("change",a.proxy(this.change,this)).on("keypress",a.proxy(this.keypress,this)).on("keyup",a.proxy(this.keyup,this)),this.eventSupported("keydown")&&this.$element.on("keydown",a.proxy(this.keydown,this)),this.$menu.on("click",a.proxy(this.click,this)).on("mouseenter","li",a.proxy(this.mouseenter,this)).on("mouseleave","li",a.proxy(this.mouseleave,this)),a(window).on("unload",a.proxy(this.destroyReplacement,this))},eventSupported:function(a){var b=a in this.$element;return b||(this.$element.setAttribute(a,"return;"),b=typeof this.$element[a]=="function"),b},move:function(a){if(!this.shown)return;switch(a.keyCode){case 9:case 13:case 27:a.preventDefault();break;case 38:a.preventDefault(),this.prev();break;case 40:a.preventDefault(),this.next()}a.stopPropagation()},keydown:function(b){this.suppressKeyPressRepeat=~a.inArray(b.keyCode,[40,38,9,13,27]),this.move(b)},keypress:function(a){if(this.suppressKeyPressRepeat)return;this.move(a)},keyup:function(a){switch(a.keyCode){case 40:case 38:case 16:case 17:case 18:break;case 9:case 13:if(!this.shown)return;this.select();break;case 27:if(!this.shown)return;this.hide();break;default:this.lookup()}a.stopPropagation(),a.preventDefault()},change:function(a){var b;this.$element.val()!=this.text&&(b=this.$element.val()===""||this.strict?"":this.$element.val(),this.$element.val(b),this.$element.attr("data-value",b),this.text=b,typeof this.$target!="undefined"&&this.$target.val(b))},focus:function(a){this.focused=!0},blur:function(a){this.focused=!1,!this.mousedover&&this.shown&&this.hide()},click:function(a){a.stopPropagation(),a.preventDefault(),this.select(),this.$element.focus()},mouseenter:function(b){this.mousedover=!0,this.$menu.find(".active").removeClass("active"),a(b.currentTarget).addClass("active")},mouseleave:function(a){this.mousedover=!1,!this.focused&&this.shown&&this.hide()}};var c=a.fn.typeahead;a.fn.typeahead=function(c){return this.each(function(){var d=a(this),f=d.data("typeahead"),g=typeof c=="object"&&c;f||d.data("typeahead",f=new b(this,g)),typeof c=="string"&&f[c]()})},a.fn.typeahead.defaults={source:[],items:8,menu:'<ul class="typeahead dropdown-menu"></ul>',item:'<li><a href="#"></a></li>',ajaxdelay:400,minLength:1},a.fn.typeahead.Constructor=b,a.fn.typeahead.noConflict=function(){return a.fn.typeahead=c,this},a(document).off("focus.typeahead.data-api").on("focus.typeahead.data-api",'[data-provide="typeahead"]',function(b){var c=a(this);if(c.data("typeahead"))return;c.is("select")&&c.attr("autofocus",!0),b.preventDefault(),c.typeahead(c.data())})}(window.jQuery),!function(a){"use strict";var b=window.orientation!==undefined,c=navigator.userAgent.toLowerCase().indexOf("android")>-1,d=function(b,d){if(c)return;this.$element=a(b),this.options=a.extend({},a.fn.inputmask.defaults,d),this.mask=String(d.mask),this.init(),this.listen(),this.checkVal()};d.prototype={init:function(){var b=this.options.definitions,c=this.mask.length;this.tests=[],this.partialPosition=this.mask.length,this.firstNonMaskPos=null,a.each(this.mask.split(""),a.proxy(function(a,d){d=="?"?(c--,this.partialPosition=a):b[d]?(this.tests.push(new RegExp(b[d])),this.firstNonMaskPos===null&&(this.firstNonMaskPos=this.tests.length-1)):this.tests.push(null)},this)),this.buffer=a.map(this.mask.split(""),a.proxy(function(a,c){if(a!="?")return b[a]?this.options.placeholder:a},this)),this.focusText=this.$element.val(),this.$element.data("rawMaskFn",a.proxy(function(){return a.map(this.buffer,function(a,b){return this.tests[b]&&a!=this.options.placeholder?a:null}).join("")},this))},listen:function(){if(this.$element.attr("readonly"))return;var b=(navigator.userAgent.match(/msie/i)?"paste":"input")+".mask";this.$element.on("unmask",a.proxy(this.unmask,this)).on("focus.mask",a.proxy(this.focusEvent,this)).on("blur.mask",a.proxy(this.blurEvent,this)).on("keydown.mask",a.proxy(this.keydownEvent,this)).on("keypress.mask",a.proxy(this.keypressEvent,this)).on(b,a.proxy(this.pasteEvent,this))},caret:function(a,b){if(this.$element.length===0)return;if(typeof a=="number")return b=typeof b=="number"?b:a,this.$element.each(function(){if(this.setSelectionRange)this.setSelectionRange(a,b);else if(this.createTextRange){var c=this.createTextRange();c.collapse(!0),c.moveEnd("character",b),c.moveStart("character",a),c.select()}});if(this.$element[0].setSelectionRange)a=this.$element[0].selectionStart,b=this.$element[0].selectionEnd;else if(document.selection&&document.selection.createRange){var c=document.selection.createRange();a=0-c.duplicate().moveStart("character",-1e5),b=a+c.text.length}return{begin:a,end:b}},seekNext:function(a){var b=this.mask.length;while(++a<=b&&!this.tests[a]);return a},seekPrev:function(a){while(--a>=0&&!this.tests[a]);return a},shiftL:function(a,b){var c=this.mask.length;if(a<0)return;for(var d=a,e=this.seekNext(b);d<c;d++)if(this.tests[d]){if(!(e<c&&this.tests[d].test(this.buffer[e])))break;this.buffer[d]=this.buffer[e],this.buffer[e]=this.options.placeholder,e=this.seekNext(e)}this.writeBuffer(),this.caret(Math.max(this.firstNonMaskPos,a))},shiftR:function(a){var b=this.mask.length;for(var c=a,d=this.options.placeholder;c<b;c++)if(this.tests[c]){var e=this.seekNext(c),f=this.buffer[c];this.buffer[c]=d;if(!(e<b&&this.tests[e].test(f)))break;d=f}},unmask:function(){this.$element.unbind(".mask").removeData("inputmask")},focusEvent:function(){this.focusText=this.$element.val();var b=this.mask.length,c=this.checkVal();this.writeBuffer();var d=this,f=function(){c==b?d.caret(0,c):d.caret(c)};a.browser.msie?f():setTimeout(f,0)},blurEvent:function(){this.checkVal(),this.$element.val()!=this.focusText&&this.$element.trigger("change")},keydownEvent:function(a){var c=a.which;if(c==8||c==46||b&&c==127){var d=this.caret(),e=d.begin,f=d.end;return f-e===0&&(e=c!=46?this.seekPrev(e):f=this.seekNext(e-1),f=c==46?this.seekNext(f):f),this.clearBuffer(e,f),this.shiftL(e,f-1),!1}if(c==27)return this.$element.val(this.focusText),this.caret(0,this.checkVal()),!1},keypressEvent:function(a){var b=this.mask.length,c=a.which,d=this.caret();if(a.ctrlKey||a.altKey||a.metaKey||c<32)return!0;if(c){d.end-d.begin!==0&&(this.clearBuffer(d.begin,d.end),this.shiftL(d.begin,d.end-1));var e=this.seekNext(d.begin-1);if(e<b){var f=String.fromCharCode(c);if(this.tests[e].test(f)){this.shiftR(e),this.buffer[e]=f,this.writeBuffer();var g=this.seekNext(e);this.caret(g)}}return!1}},pasteEvent:function(){var a=this;setTimeout(function(){a.caret(a.checkVal(!0))},0)},clearBuffer:function(a,b){var c=this.mask.length;for(var d=a;d<b&&d<c;d++)this.tests[d]&&(this.buffer[d]=this.options.placeholder)},writeBuffer:function(){return this.$element.val(this.buffer.join("")).val()},checkVal:function(a){var b=this.mask.length,c=this.$element.val(),d=-1;for(var e=0,f=0;e<b;e++)if(this.tests[e]){this.buffer[e]=this.options.placeholder;while(f++<c.length){var g=c.charAt(f-1);if(this.tests[e].test(g)){this.buffer[e]=g,d=e;break}}if(f>c.length)break}else this.buffer[e]==c.charAt(f)&&e!=this.partialPosition&&(f++,d=e);if(!a&&d+1<this.partialPosition)this.$element.val(""),this.clearBuffer(0,b);else if(a||d+1>=this.partialPosition)this.writeBuffer(),a||this.$element.val(this.$element.val().substring(0,d+1));return this.partialPosition?e:this.firstNonMaskPos}},a.fn.inputmask=function(b){return this.each(function(){var c=a(this),f=c.data("inputmask");f||c.data("inputmask",f=new d(this,b))})},a.fn.inputmask.defaults={mask:"",placeholder:"_",definitions:{9:"[0-9]",a:"[A-Za-z]","?":"[A-Za-z0-9]","*":"."}},a.fn.inputmask.Constructor=d,a(document).on("focus.inputmask.data-api","[data-mask]",function(b){var c=a(this);if(c.data("inputmask"))return;b.preventDefault(),c.inputmask(c.data())})}(window.jQuery),!function(a){"use strict";var b=function(b,c){c=a.extend({},a.fn.rowlink.defaults,c);var d=b.nodeName.toLowerCase()=="tr"?a(b):a(b).find("tr:has(td)");d.each(function(){var b=a(this).find(c.target).first();if(!b.length)return;var d=b.attr("href");a(this).find("td").not(".nolink").click(function(){window.location=d}),a(this).addClass("rowlink"),b.replaceWith(b.html())})};a.fn.rowlink=function(c){return this.each(function(){var d=a(this),f=d.data("rowlink");f||d.data("rowlink",f=new b(this,c))})},a.fn.rowlink.defaults={target:"a"},a.fn.rowlink.Constructor=b,a(function(){a('[data-provide="rowlink"],[data-provides="rowlink"]').each(function(){a(this).rowlink(a(this).data())})})}(window.jQuery),!function(a){"use strict";var b=function(b,c){this.$element=a(b),this.type=this.$element.data("uploadtype")||(this.$element.find(".thumbnail").length>0?"image":"file"),this.$input=this.$element.find(":file");if(this.$input.length===0)return;this.name=this.$input.attr("name")||c.name,this.$hidden=this.$element.find('input[type=hidden][name="'+this.name+'"]'),this.$hidden.length===0&&(this.$hidden=a('<input type="hidden" />'),this.$element.prepend(this.$hidden)),this.$preview=this.$element.find(".fileupload-preview");var d=this.$preview.css("height");this.$preview.css("display")!="inline"&&d!="0px"&&d!="none"&&this.$preview.css("line-height",d),this.original={exists:this.$element.hasClass("fileupload-exists"),preview:this.$preview.html(),hiddenVal:this.$hidden.val()},this.$remove=this.$element.find('[data-dismiss="fileupload"]'),this.$element.find('[data-trigger="fileupload"]').on("click.fileupload",a.proxy(this.trigger,this)),this.listen()};b.prototype={listen:function(){this.$input.on("change.fileupload",a.proxy(this.change,this)),a(this.$input[0].form).on("reset.fileupload",a.proxy(this.reset,this)),this.$remove&&this.$remove.on("click.fileupload",a.proxy(this.clear,this))},change:function(a,b){if(b==="clear")return;var c=a.target.files!==undefined?a.target.files[0]:a.target.value?{name:a.target.value.replace(/^.+\\/,"")}:null;if(!c){this.clear();return}this.$hidden.val(""),this.$hidden.attr("name",""),this.$input.attr("name",this.name);if(this.type==="image"&&this.$preview.length>0&&(typeof c.type!="undefined"?c.type.match("image.*"):c.name.match(/\.(gif|png|jpe?g)$/i))&&typeof FileReader!="undefined"){var d=new FileReader,e=this.$preview,f=this.$element;d.onload=function(a){e.html('<img src="'+a.target.result+'" '+(e.css("max-height")!="none"?'style="max-height: '+e.css("max-height")+';"':"")+" />"),f.addClass("fileupload-exists").removeClass("fileupload-new")},d.readAsDataURL(c)}else this.$preview.text(c.name),this.$element.addClass("fileupload-exists").removeClass("fileupload-new")},clear:function(a){this.$hidden.val(""),this.$hidden.attr("name",this.name),this.$input.attr("name","");if(navigator.userAgent.match(/msie/i)){var b=this.$input.clone(!0);this.$input.after(b),this.$input.remove(),this.$input=b}else this.$input.val("");this.$preview.html(""),this.$element.addClass("fileupload-new").removeClass("fileupload-exists"),a&&(this.$input.trigger("change",["clear"]),a.preventDefault())},reset:function(a){this.clear(),this.$hidden.val(this.original.hiddenVal),this.$preview.html(this.original.preview),this.original.exists?this.$element.addClass("fileupload-exists").removeClass("fileupload-new"):this.$element.addClass("fileupload-new").removeClass("fileupload-exists")},trigger:function(a){this.$input.trigger("click"),a.preventDefault()}},a.fn.fileupload=function(c){return this.each(function(){var d=a(this),f=d.data("fileupload");f||d.data("fileupload",f=new b(this,c)),typeof c=="string"&&f[c]()})},a.fn.fileupload.Constructor=b,a(document).on("click.fileupload.data-api",'[data-provides="fileupload"]',function(b){var c=a(this);if(c.data("fileupload"))return;c.fileupload(c.data());var d=a(b.target).closest('[data-dismiss="fileupload"],[data-trigger="fileupload"]');d.length>0&&(d.trigger("click.fileupload"),b.preventDefault())})}(window.jQuery);