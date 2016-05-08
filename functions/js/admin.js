(function(){var a,b,c,d,e,f={}.hasOwnProperty,g=function(a,b){function c(){this.constructor=a}for(var d in b)f.call(b,d)&&(a[d]=b[d]);return c.prototype=b.prototype,a.prototype=new c,a.__super__=b.prototype,a};d=function(){function a(){this.options_index=0,this.parsed=[]}return a.prototype.add_node=function(a){return"OPTGROUP"===a.nodeName.toUpperCase()?this.add_group(a):this.add_option(a)},a.prototype.add_group=function(a){var b,c,d,e,f,g;for(b=this.parsed.length,this.parsed.push({array_index:b,group:!0,label:this.escapeExpression(a.label),children:0,disabled:a.disabled}),f=a.childNodes,g=[],d=0,e=f.length;e>d;d++)c=f[d],g.push(this.add_option(c,b,a.disabled));return g},a.prototype.add_option=function(a,b,c){return"OPTION"===a.nodeName.toUpperCase()?(""!==a.text?(null!=b&&(this.parsed[b].children+=1),this.parsed.push({array_index:this.parsed.length,options_index:this.options_index,value:a.value,text:a.text,html:a.innerHTML,selected:a.selected,disabled:c===!0?c:a.disabled,group_array_index:b,classes:a.className,style:a.style.cssText})):this.parsed.push({array_index:this.parsed.length,options_index:this.options_index,empty:!0}),this.options_index+=1):void 0},a.prototype.escapeExpression=function(a){var b,c;return null==a||a===!1?"":/[\&\<\>\"\'\`]/.test(a)?(b={"<":"&lt;",">":"&gt;",'"':"&quot;","'":"&#x27;","`":"&#x60;"},c=/&(?!\w+;)|[\<\>\"\'\`]/g,a.replace(c,function(a){return b[a]||"&amp;"})):a},a}(),d.select_to_array=function(a){var b,c,e,f,g;for(c=new d,g=a.childNodes,e=0,f=g.length;f>e;e++)b=g[e],c.add_node(b);return c.parsed},b=function(){function a(b,c){this.form_field=b,this.options=null!=c?c:{},a.browser_is_supported()&&(this.is_multiple=this.form_field.multiple,this.set_default_text(),this.set_default_values(),this.setup(),this.set_up_html(),this.register_observers())}return a.prototype.set_default_values=function(){var a=this;return this.click_test_action=function(b){return a.test_active_click(b)},this.activate_action=function(b){return a.activate_field(b)},this.active_field=!1,this.mouse_on_container=!1,this.results_showing=!1,this.result_highlighted=null,this.allow_single_deselect=null!=this.options.allow_single_deselect&&null!=this.form_field.options[0]&&""===this.form_field.options[0].text?this.options.allow_single_deselect:!1,this.disable_search_threshold=this.options.disable_search_threshold||0,this.disable_search=this.options.disable_search||!1,this.enable_split_word_search=null!=this.options.enable_split_word_search?this.options.enable_split_word_search:!0,this.group_search=null!=this.options.group_search?this.options.group_search:!0,this.search_contains=this.options.search_contains||!1,this.single_backstroke_delete=null!=this.options.single_backstroke_delete?this.options.single_backstroke_delete:!0,this.max_selected_options=this.options.max_selected_options||1/0,this.inherit_select_classes=this.options.inherit_select_classes||!1,this.display_selected_options=null!=this.options.display_selected_options?this.options.display_selected_options:!0,this.display_disabled_options=null!=this.options.display_disabled_options?this.options.display_disabled_options:!0},a.prototype.set_default_text=function(){return this.form_field.getAttribute("data-placeholder")?this.default_text=this.form_field.getAttribute("data-placeholder"):this.is_multiple?this.default_text=this.options.placeholder_text_multiple||this.options.placeholder_text||a.default_multiple_text:this.default_text=this.options.placeholder_text_single||this.options.placeholder_text||a.default_single_text,this.results_none_found=this.form_field.getAttribute("data-no_results_text")||this.options.no_results_text||a.default_no_result_text},a.prototype.mouse_enter=function(){return this.mouse_on_container=!0},a.prototype.mouse_leave=function(){return this.mouse_on_container=!1},a.prototype.input_focus=function(a){var b=this;if(this.is_multiple){if(!this.active_field)return setTimeout(function(){return b.container_mousedown()},50)}else if(!this.active_field)return this.activate_field()},a.prototype.input_blur=function(a){var b=this;return this.mouse_on_container?void 0:(this.active_field=!1,setTimeout(function(){return b.blur_test()},100))},a.prototype.results_option_build=function(a){var b,c,d,e,f;for(b="",f=this.results_data,d=0,e=f.length;e>d;d++)c=f[d],b+=c.group?this.result_add_group(c):this.result_add_option(c),(null!=a?a.first:void 0)&&(c.selected&&this.is_multiple?this.choice_build(c):c.selected&&!this.is_multiple&&this.single_set_selected_text(c.text));return b},a.prototype.result_add_option=function(a){var b,c;return a.search_match&&this.include_option_in_results(a)?(b=[],a.disabled||a.selected&&this.is_multiple||b.push("active-result"),!a.disabled||a.selected&&this.is_multiple||b.push("disabled-result"),a.selected&&b.push("result-selected"),null!=a.group_array_index&&b.push("group-option"),""!==a.classes&&b.push(a.classes),c=document.createElement("li"),c.className=b.join(" "),c.style.cssText=a.style,c.setAttribute("data-option-array-index",a.array_index),c.innerHTML=a.search_text,this.outerHTML(c)):""},a.prototype.result_add_group=function(a){var b;return(a.search_match||a.group_match)&&a.active_options>0?(b=document.createElement("li"),b.className="group-result",b.innerHTML=a.search_text,this.outerHTML(b)):""},a.prototype.results_update_field=function(){return this.set_default_text(),this.is_multiple||this.results_reset_cleanup(),this.result_clear_highlight(),this.results_build(),this.results_showing?this.winnow_results():void 0},a.prototype.reset_single_select_options=function(){var a,b,c,d,e;for(d=this.results_data,e=[],b=0,c=d.length;c>b;b++)a=d[b],a.selected?e.push(a.selected=!1):e.push(void 0);return e},a.prototype.results_toggle=function(){return this.results_showing?this.results_hide():this.results_show()},a.prototype.results_search=function(a){return this.results_showing?this.winnow_results():this.results_show()},a.prototype.winnow_results=function(){var a,b,c,d,e,f,g,h,i,j,k,l;for(this.no_results_clear(),d=0,f=this.get_search_text(),a=f.replace(/[-[\]{}()*+?.,\\^$|#\s]/g,"\\$&"),i=new RegExp(a,"i"),c=this.get_search_regex(a),l=this.results_data,j=0,k=l.length;k>j;j++)b=l[j],b.search_match=!1,e=null,this.include_option_in_results(b)&&(b.group&&(b.group_match=!1,b.active_options=0),null!=b.group_array_index&&this.results_data[b.group_array_index]&&(e=this.results_data[b.group_array_index],0===e.active_options&&e.search_match&&(d+=1),e.active_options+=1),(!b.group||this.group_search)&&(b.search_text=b.group?b.label:b.text,b.search_match=this.search_string_match(b.search_text,c),b.search_match&&!b.group&&(d+=1),b.search_match?(f.length&&(g=b.search_text.search(i),h=b.search_text.substr(0,g+f.length)+"</em>"+b.search_text.substr(g+f.length),b.search_text=h.substr(0,g)+"<em>"+h.substr(g)),null!=e&&(e.group_match=!0)):null!=b.group_array_index&&this.results_data[b.group_array_index].search_match&&(b.search_match=!0)));return this.result_clear_highlight(),1>d&&f.length?(this.update_results_content(""),this.no_results(f)):(this.update_results_content(this.results_option_build()),this.winnow_results_set_highlight())},a.prototype.get_search_regex=function(a){var b;return b=this.search_contains?"":"^",new RegExp(b+a,"i")},a.prototype.search_string_match=function(a,b){var c,d,e,f;if(b.test(a))return!0;if(this.enable_split_word_search&&(a.indexOf(" ")>=0||0===a.indexOf("["))&&(d=a.replace(/\[|\]/g,"").split(" "),d.length))for(e=0,f=d.length;f>e;e++)if(c=d[e],b.test(c))return!0},a.prototype.choices_count=function(){var a,b,c,d;if(null!=this.selected_option_count)return this.selected_option_count;for(this.selected_option_count=0,d=this.form_field.options,b=0,c=d.length;c>b;b++)a=d[b],a.selected&&(this.selected_option_count+=1);return this.selected_option_count},a.prototype.choices_click=function(a){return a.preventDefault(),this.results_showing||this.is_disabled?void 0:this.results_show()},a.prototype.keyup_checker=function(a){var b,c;switch(b=null!=(c=a.which)?c:a.keyCode,this.search_field_scale(),b){case 8:if(this.is_multiple&&this.backstroke_length<1&&this.choices_count()>0)return this.keydown_backstroke();if(!this.pending_backstroke)return this.result_clear_highlight(),this.results_search();break;case 13:if(a.preventDefault(),this.results_showing)return this.result_select(a);break;case 27:return this.results_showing&&this.results_hide(),!0;case 9:case 38:case 40:case 16:case 91:case 17:break;default:return this.results_search()}},a.prototype.clipboard_event_checker=function(a){var b=this;return setTimeout(function(){return b.results_search()},50)},a.prototype.container_width=function(){return null!=this.options.width?this.options.width:""+this.form_field.offsetWidth+"px"},a.prototype.include_option_in_results=function(a){return this.is_multiple&&!this.display_selected_options&&a.selected?!1:!this.display_disabled_options&&a.disabled?!1:a.empty?!1:!0},a.prototype.search_results_touchstart=function(a){return this.touch_started=!0,this.search_results_mouseover(a)},a.prototype.search_results_touchmove=function(a){return this.touch_started=!1,this.search_results_mouseout(a)},a.prototype.search_results_touchend=function(a){return this.touch_started?this.search_results_mouseup(a):void 0},a.prototype.outerHTML=function(a){var b;return a.outerHTML?a.outerHTML:(b=document.createElement("div"),b.appendChild(a),b.innerHTML)},a.browser_is_supported=function(){return"Microsoft Internet Explorer"===window.navigator.appName?document.documentMode>=8:/iP(od|hone)/i.test(window.navigator.userAgent)?!1:/Android/i.test(window.navigator.userAgent)&&/Mobile/i.test(window.navigator.userAgent)?!1:!0},a.default_multiple_text="Select Some Options",a.default_single_text="Select an Option",a.default_no_result_text="No results match",a}(),a=jQuery,a.fn.extend({chosen:function(d){return b.browser_is_supported()?this.each(function(b){var e,f;e=a(this),f=e.data("chosen"),"destroy"===d&&f instanceof c?f.destroy():f instanceof c||e.data("chosen",new c(this,d))}):this}}),c=function(b){function c(){return e=c.__super__.constructor.apply(this,arguments)}return g(c,b),c.prototype.setup=function(){return this.form_field_jq=a(this.form_field),this.current_selectedIndex=this.form_field.selectedIndex,this.is_rtl=this.form_field_jq.hasClass("chosen-rtl")},c.prototype.set_up_html=function(){var b,c;return b=["chosen-container"],b.push("chosen-container-"+(this.is_multiple?"multi":"single")),this.inherit_select_classes&&this.form_field.className&&b.push(this.form_field.className),this.is_rtl&&b.push("chosen-rtl"),c={"class":b.join(" "),style:"width: "+this.container_width()+";",title:this.form_field.title},this.form_field.id.length&&(c.id=this.form_field.id.replace(/[^\w]/g,"_")+"_chosen"),this.container=a("<div />",c),this.is_multiple?this.container.html('<ul class="chosen-choices"><li class="search-field"><input type="text" value="'+this.default_text+'" class="default" autocomplete="off" style="width:25px;" /></li></ul><div class="chosen-drop"><ul class="chosen-results"></ul></div>'):this.container.html('<a class="chosen-single chosen-default" tabindex="-1"><span>'+this.default_text+'</span><div><b></b></div></a><div class="chosen-drop"><div class="chosen-search"><input type="text" autocomplete="off" /></div><ul class="chosen-results"></ul></div>'),this.form_field_jq.hide().after(this.container),this.dropdown=this.container.find("div.chosen-drop").first(),this.search_field=this.container.find("input").first(),this.search_results=this.container.find("ul.chosen-results").first(),this.search_field_scale(),this.search_no_results=this.container.find("li.no-results").first(),this.is_multiple?(this.search_choices=this.container.find("ul.chosen-choices").first(),this.search_container=this.container.find("li.search-field").first()):(this.search_container=this.container.find("div.chosen-search").first(),this.selected_item=this.container.find(".chosen-single").first()),this.results_build(),this.set_tab_index(),this.set_label_behavior(),this.form_field_jq.trigger("chosen:ready",{chosen:this})},c.prototype.register_observers=function(){var a=this;return this.container.bind("touchstart.chosen",function(b){a.container_mousedown(b)}),this.container.bind("touchend.chosen",function(b){a.container_mouseup(b)}),this.container.bind("mousedown.chosen",function(b){a.container_mousedown(b)}),this.container.bind("mouseup.chosen",function(b){a.container_mouseup(b)}),this.container.bind("mouseenter.chosen",function(b){a.mouse_enter(b)}),this.container.bind("mouseleave.chosen",function(b){a.mouse_leave(b)}),this.search_results.bind("mouseup.chosen",function(b){a.search_results_mouseup(b)}),this.search_results.bind("mouseover.chosen",function(b){a.search_results_mouseover(b)}),this.search_results.bind("mouseout.chosen",function(b){a.search_results_mouseout(b)}),this.search_results.bind("mousewheel.chosen DOMMouseScroll.chosen",function(b){a.search_results_mousewheel(b)}),this.search_results.bind("touchstart.chosen",function(b){a.search_results_touchstart(b)}),this.search_results.bind("touchmove.chosen",function(b){a.search_results_touchmove(b)}),this.search_results.bind("touchend.chosen",function(b){a.search_results_touchend(b)}),this.form_field_jq.bind("chosen:updated.chosen",function(b){a.results_update_field(b)}),this.form_field_jq.bind("chosen:activate.chosen",function(b){a.activate_field(b)}),this.form_field_jq.bind("chosen:open.chosen",function(b){a.container_mousedown(b)}),this.form_field_jq.bind("chosen:close.chosen",function(b){a.input_blur(b)}),this.search_field.bind("blur.chosen",function(b){a.input_blur(b)}),this.search_field.bind("keyup.chosen",function(b){a.keyup_checker(b)}),this.search_field.bind("keydown.chosen",function(b){a.keydown_checker(b)}),this.search_field.bind("focus.chosen",function(b){a.input_focus(b)}),this.search_field.bind("cut.chosen",function(b){a.clipboard_event_checker(b)}),this.search_field.bind("paste.chosen",function(b){a.clipboard_event_checker(b)}),this.is_multiple?this.search_choices.bind("click.chosen",function(b){a.choices_click(b)}):this.container.bind("click.chosen",function(a){a.preventDefault()})},c.prototype.destroy=function(){return a(this.container[0].ownerDocument).unbind("click.chosen",this.click_test_action),this.search_field[0].tabIndex&&(this.form_field_jq[0].tabIndex=this.search_field[0].tabIndex),this.container.remove(),this.form_field_jq.removeData("chosen"),this.form_field_jq.show()},c.prototype.search_field_disabled=function(){return this.is_disabled=this.form_field_jq[0].disabled,this.is_disabled?(this.container.addClass("chosen-disabled"),this.search_field[0].disabled=!0,this.is_multiple||this.selected_item.unbind("focus.chosen",this.activate_action),this.close_field()):(this.container.removeClass("chosen-disabled"),this.search_field[0].disabled=!1,this.is_multiple?void 0:this.selected_item.bind("focus.chosen",this.activate_action))},c.prototype.container_mousedown=function(b){return this.is_disabled||(b&&"mousedown"===b.type&&!this.results_showing&&b.preventDefault(),null!=b&&a(b.target).hasClass("search-choice-close"))?void 0:(this.active_field?this.is_multiple||!b||a(b.target)[0]!==this.selected_item[0]&&!a(b.target).parents("a.chosen-single").length||(b.preventDefault(),this.results_toggle()):(this.is_multiple&&this.search_field.val(""),a(this.container[0].ownerDocument).bind("click.chosen",this.click_test_action),this.results_show()),this.activate_field())},c.prototype.container_mouseup=function(a){return"ABBR"!==a.target.nodeName||this.is_disabled?void 0:this.results_reset(a)},c.prototype.search_results_mousewheel=function(a){var b;return a.originalEvent&&(b=a.originalEvent.deltaY||-a.originalEvent.wheelDelta||a.originalEvent.detail),null!=b?(a.preventDefault(),"DOMMouseScroll"===a.type&&(b=40*b),this.search_results.scrollTop(b+this.search_results.scrollTop())):void 0},c.prototype.blur_test=function(a){return!this.active_field&&this.container.hasClass("chosen-container-active")?this.close_field():void 0},c.prototype.close_field=function(){return a(this.container[0].ownerDocument).unbind("click.chosen",this.click_test_action),this.active_field=!1,this.results_hide(),this.container.removeClass("chosen-container-active"),this.clear_backstroke(),this.show_search_field_default(),this.search_field_scale()},c.prototype.activate_field=function(){return this.container.addClass("chosen-container-active"),this.active_field=!0,this.search_field.val(this.search_field.val()),this.search_field.focus()},c.prototype.test_active_click=function(b){var c;return c=a(b.target).closest(".chosen-container"),c.length&&this.container[0]===c[0]?this.active_field=!0:this.close_field()},c.prototype.results_build=function(){return this.parsing=!0,this.selected_option_count=null,this.results_data=d.select_to_array(this.form_field),this.is_multiple?this.search_choices.find("li.search-choice").remove():this.is_multiple||(this.single_set_selected_text(),this.disable_search||this.form_field.options.length<=this.disable_search_threshold?(this.search_field[0].readOnly=!0,this.container.addClass("chosen-container-single-nosearch")):(this.search_field[0].readOnly=!1,this.container.removeClass("chosen-container-single-nosearch"))),this.update_results_content(this.results_option_build({first:!0})),this.search_field_disabled(),this.show_search_field_default(),this.search_field_scale(),this.parsing=!1},c.prototype.result_do_highlight=function(a){var b,c,d,e,f;if(a.length){if(this.result_clear_highlight(),this.result_highlight=a,this.result_highlight.addClass("highlighted"),d=parseInt(this.search_results.css("maxHeight"),10),f=this.search_results.scrollTop(),e=d+f,c=this.result_highlight.position().top+this.search_results.scrollTop(),b=c+this.result_highlight.outerHeight(),b>=e)return this.search_results.scrollTop(b-d>0?b-d:0);if(f>c)return this.search_results.scrollTop(c)}},c.prototype.result_clear_highlight=function(){return this.result_highlight&&this.result_highlight.removeClass("highlighted"),this.result_highlight=null},c.prototype.results_show=function(){return this.is_multiple&&this.max_selected_options<=this.choices_count()?(this.form_field_jq.trigger("chosen:maxselected",{chosen:this}),!1):(this.container.addClass("chosen-with-drop"),this.results_showing=!0,this.search_field.focus(),this.search_field.val(this.search_field.val()),this.winnow_results(),this.form_field_jq.trigger("chosen:showing_dropdown",{chosen:this}))},c.prototype.update_results_content=function(a){return this.search_results.html(a)},c.prototype.results_hide=function(){return this.results_showing&&(this.result_clear_highlight(),this.container.removeClass("chosen-with-drop"),this.form_field_jq.trigger("chosen:hiding_dropdown",{chosen:this})),this.results_showing=!1},c.prototype.set_tab_index=function(a){var b;return this.form_field.tabIndex?(b=this.form_field.tabIndex,this.form_field.tabIndex=-1,this.search_field[0].tabIndex=b):void 0},c.prototype.set_label_behavior=function(){var b=this;return this.form_field_label=this.form_field_jq.parents("label"),!this.form_field_label.length&&this.form_field.id.length&&(this.form_field_label=a("label[for='"+this.form_field.id+"']")),this.form_field_label.length>0?this.form_field_label.bind("click.chosen",function(a){return b.is_multiple?b.container_mousedown(a):b.activate_field()}):void 0},c.prototype.show_search_field_default=function(){return this.is_multiple&&this.choices_count()<1&&!this.active_field?(this.search_field.val(this.default_text),this.search_field.addClass("default")):(this.search_field.val(""),this.search_field.removeClass("default"))},c.prototype.search_results_mouseup=function(b){var c;return c=a(b.target).hasClass("active-result")?a(b.target):a(b.target).parents(".active-result").first(),c.length?(this.result_highlight=c,this.result_select(b),this.search_field.focus()):void 0},c.prototype.search_results_mouseover=function(b){var c;return c=a(b.target).hasClass("active-result")?a(b.target):a(b.target).parents(".active-result").first(),c?this.result_do_highlight(c):void 0},c.prototype.search_results_mouseout=function(b){return a(b.target).hasClass("active-result")?this.result_clear_highlight():void 0},c.prototype.choice_build=function(b){var c,d,e=this;return c=a("<li />",{"class":"search-choice"}).html("<span>"+b.html+"</span>"),b.disabled?c.addClass("search-choice-disabled"):(d=a("<a />",{"class":"search-choice-close","data-option-array-index":b.array_index}),d.bind("click.chosen",function(a){return e.choice_destroy_link_click(a)}),c.append(d)),this.search_container.before(c)},c.prototype.choice_destroy_link_click=function(b){return b.preventDefault(),b.stopPropagation(),this.is_disabled?void 0:this.choice_destroy(a(b.target))},c.prototype.choice_destroy=function(a){return this.result_deselect(a[0].getAttribute("data-option-array-index"))?(this.show_search_field_default(),this.is_multiple&&this.choices_count()>0&&this.search_field.val().length<1&&this.results_hide(),a.parents("li").first().remove(),this.search_field_scale()):void 0},c.prototype.results_reset=function(){return this.reset_single_select_options(),this.form_field.options[0].selected=!0,this.single_set_selected_text(),this.show_search_field_default(),this.results_reset_cleanup(),this.form_field_jq.trigger("change"),this.active_field?this.results_hide():void 0},c.prototype.results_reset_cleanup=function(){return this.current_selectedIndex=this.form_field.selectedIndex,this.selected_item.find("abbr").remove()},c.prototype.result_select=function(a){var b,c;return this.result_highlight?(b=this.result_highlight,this.result_clear_highlight(),this.is_multiple&&this.max_selected_options<=this.choices_count()?(this.form_field_jq.trigger("chosen:maxselected",{chosen:this}),!1):(this.is_multiple?b.removeClass("active-result"):this.reset_single_select_options(),c=this.results_data[b[0].getAttribute("data-option-array-index")],c.selected=!0,this.form_field.options[c.options_index].selected=!0,this.selected_option_count=null,this.is_multiple?this.choice_build(c):this.single_set_selected_text(c.text),(a.metaKey||a.ctrlKey)&&this.is_multiple||this.results_hide(),this.search_field.val(""),(this.is_multiple||this.form_field.selectedIndex!==this.current_selectedIndex)&&this.form_field_jq.trigger("change",{selected:this.form_field.options[c.options_index].value}),this.current_selectedIndex=this.form_field.selectedIndex,this.search_field_scale())):void 0},c.prototype.single_set_selected_text=function(a){return null==a&&(a=this.default_text),a===this.default_text?this.selected_item.addClass("chosen-default"):(this.single_deselect_control_build(),this.selected_item.removeClass("chosen-default")),this.selected_item.find("span").text(a)},c.prototype.result_deselect=function(a){var b;return b=this.results_data[a],this.form_field.options[b.options_index].disabled?!1:(b.selected=!1,this.form_field.options[b.options_index].selected=!1,this.selected_option_count=null,this.result_clear_highlight(),this.results_showing&&this.winnow_results(),this.form_field_jq.trigger("change",{deselected:this.form_field.options[b.options_index].value}),this.search_field_scale(),!0)},c.prototype.single_deselect_control_build=function(){return this.allow_single_deselect?(this.selected_item.find("abbr").length||this.selected_item.find("span").first().after('<abbr class="search-choice-close"></abbr>'),this.selected_item.addClass("chosen-single-with-deselect")):void 0},c.prototype.get_search_text=function(){return this.search_field.val()===this.default_text?"":a("<div/>").text(a.trim(this.search_field.val())).html()},c.prototype.winnow_results_set_highlight=function(){var a,b;return b=this.is_multiple?[]:this.search_results.find(".result-selected.active-result"),a=b.length?b.first():this.search_results.find(".active-result").first(),null!=a?this.result_do_highlight(a):void 0},c.prototype.no_results=function(b){var c;return c=a('<li class="no-results">'+this.results_none_found+' "<span></span>"</li>'),c.find("span").first().html(b),this.search_results.append(c),this.form_field_jq.trigger("chosen:no_results",{chosen:this})},c.prototype.no_results_clear=function(){return this.search_results.find(".no-results").remove()},c.prototype.keydown_arrow=function(){var a;return this.results_showing&&this.result_highlight?(a=this.result_highlight.nextAll("li.active-result").first())?this.result_do_highlight(a):void 0:this.results_show()},c.prototype.keyup_arrow=function(){var a;return this.results_showing||this.is_multiple?this.result_highlight?(a=this.result_highlight.prevAll("li.active-result"),a.length?this.result_do_highlight(a.first()):(this.choices_count()>0&&this.results_hide(),this.result_clear_highlight())):void 0:this.results_show()},c.prototype.keydown_backstroke=function(){var a;return this.pending_backstroke?(this.choice_destroy(this.pending_backstroke.find("a").first()),this.clear_backstroke()):(a=this.search_container.siblings("li.search-choice").last(),a.length&&!a.hasClass("search-choice-disabled")?(this.pending_backstroke=a,this.single_backstroke_delete?this.keydown_backstroke():this.pending_backstroke.addClass("search-choice-focus")):void 0)},c.prototype.clear_backstroke=function(){return this.pending_backstroke&&this.pending_backstroke.removeClass("search-choice-focus"),this.pending_backstroke=null},c.prototype.keydown_checker=function(a){var b,c;switch(b=null!=(c=a.which)?c:a.keyCode,this.search_field_scale(),8!==b&&this.pending_backstroke&&this.clear_backstroke(),b){case 8:this.backstroke_length=this.search_field.val().length;break;case 9:this.results_showing&&!this.is_multiple&&this.result_select(a),this.mouse_on_container=!1;break;case 13:this.results_showing&&a.preventDefault();break;case 32:this.disable_search&&a.preventDefault();break;case 38:a.preventDefault(),this.keyup_arrow();break;case 40:a.preventDefault(),this.keydown_arrow()}},c.prototype.search_field_scale=function(){var b,c,d,e,f,g,h,i,j;if(this.is_multiple){for(d=0,h=0,f="position:absolute; left: -1000px; top: -1000px; display:none;",g=["font-size","font-style","font-weight","font-family","line-height","text-transform","letter-spacing"],i=0,j=g.length;j>i;i++)e=g[i],f+=e+":"+this.search_field.css(e)+";";return b=a("<div />",{style:f}),b.text(this.search_field.val()),a("body").append(b),h=b.width()+25,b.remove(),c=this.container.outerWidth(),h>c-10&&(h=c-10),this.search_field.css({width:h+"px"})}},c}(b)}).call(this),jQuery(document).ready(function(){jQuery("body").on("change",".btn_hover_style",function(){var a=jQuery(this).data("option");"_"==a?(jQuery(".icon_hover_color").closest("div.wpb_el_type_colorpicker").css({display:"none"}),jQuery(".icon_color_hoverbg").closest("div.wpb_el_type_colorpicker").css({display:"none"}),jQuery(".icon_color_hoverborder").closest("div.wpb_el_type_colorpicker").css({display:"none"}),jQuery(".btn_iconhover_color").closest("div.wpb_el_type_colorpicker").css({display:"none"}),jQuery(".btn_icon_color_hoverbg").closest("div.wpb_el_type_colorpicker").css({display:"none"}),jQuery(".btn_icon_color_hoverborder").closest("div.wpb_el_type_colorpicker").css({display:"none"})):(jQuery(".icon_hover_color").closest("div.wpb_el_type_colorpicker").css({display:"block"}),jQuery(".icon_color_hoverbg").closest("div.wpb_el_type_colorpicker").css({display:"block"}),jQuery(".icon_color_hoverborder").closest("div.wpb_el_type_colorpicker").css({display:"block"}),jQuery(".btn_iconhover_color").closest("div.wpb_el_type_colorpicker").css({display:"block"}),jQuery(".btn_icon_color_hoverbg").closest("div.wpb_el_type_colorpicker").css({display:"block"}),jQuery(".btn_icon_color_hoverborder").closest("div.wpb_el_type_colorpicker").css({display:"block"}))})}),function(a){var b=function(){var b=65,c='<div class="colorpicker"><div class="colorpicker_color"><div><div></div></div></div><div class="colorpicker_hue"><div></div></div><div class="colorpicker_new_color"></div><div class="colorpicker_current_color"></div><div class="colorpicker_hex"><input type="text" maxlength="6" size="6" /></div><div class="colorpicker_rgb_r colorpicker_field"><input type="text" maxlength="3" size="3" /><span></span></div><div class="colorpicker_rgb_g colorpicker_field"><input type="text" maxlength="3" size="3" /><span></span></div><div class="colorpicker_rgb_b colorpicker_field"><input type="text" maxlength="3" size="3" /><span></span></div><div class="colorpicker_hsb_h colorpicker_field"><input type="text" maxlength="3" size="3" /><span></span></div><div class="colorpicker_hsb_s colorpicker_field"><input type="text" maxlength="3" size="3" /><span></span></div><div class="colorpicker_hsb_b colorpicker_field"><input type="text" maxlength="3" size="3" /><span></span></div><div class="colorpicker_submit"></div></div>',d={eventName:"click",onShow:function(){},onBeforeShow:function(){},onHide:function(){},onChange:function(){},onSubmit:function(){},color:"ff0000",livePreview:!0,flat:!1},e=function(b,c){var d=L(b);a(c).data("colorpicker").fields.eq(1).val(d.r).end().eq(2).val(d.g).end().eq(3).val(d.b).end()},f=function(b,c){a(c).data("colorpicker").fields.eq(4).val(b.h).end().eq(5).val(b.s).end().eq(6).val(b.b).end()},g=function(b,c){a(c).data("colorpicker").fields.eq(0).val(N(b)).end()},h=function(b,c){a(c).data("colorpicker").selector.css("backgroundColor","#"+N({h:b.h,s:100,b:100})),a(c).data("colorpicker").selectorIndic.css({left:parseInt(150*b.s/100,10),top:parseInt(150*(100-b.b)/100,10)})},i=function(b,c){a(c).data("colorpicker").hue.css("top",parseInt(150-150*b.h/360,10))},j=function(b,c){a(c).data("colorpicker").currentColor.css("backgroundColor","#"+N(b))},k=function(b,c){a(c).data("colorpicker").newColor.css("backgroundColor","#"+N(b))},l=function(c){var d=c.charCode||c.keyCode||-1;if(d>b&&90>=d||32==d)return!1;var e=a(this).parent().parent();e.data("colorpicker").livePreview===!0&&m.apply(this)},m=function(b){var c,d=a(this).parent().parent();this.parentNode.className.indexOf("_hex")>0?d.data("colorpicker").color=c=J(H(this.value)):this.parentNode.className.indexOf("_hsb")>0?d.data("colorpicker").color=c=F({h:parseInt(d.data("colorpicker").fields.eq(4).val(),10),s:parseInt(d.data("colorpicker").fields.eq(5).val(),10),b:parseInt(d.data("colorpicker").fields.eq(6).val(),10)}):d.data("colorpicker").color=c=K(G({r:parseInt(d.data("colorpicker").fields.eq(1).val(),10),g:parseInt(d.data("colorpicker").fields.eq(2).val(),10),b:parseInt(d.data("colorpicker").fields.eq(3).val(),10)})),b&&(e(c,d.get(0)),g(c,d.get(0)),f(c,d.get(0))),h(c,d.get(0)),i(c,d.get(0)),k(c,d.get(0)),d.data("colorpicker").onChange.apply(d,[c,N(c),L(c)])},n=function(b){var c=a(this).parent().parent();c.data("colorpicker").fields.parent().removeClass("colorpicker_focus")},o=function(){b=this.parentNode.className.indexOf("_hex")>0?70:65,a(this).parent().parent().data("colorpicker").fields.parent().removeClass("colorpicker_focus"),a(this).parent().addClass("colorpicker_focus")},p=function(b){var c=a(this).parent().find("input").focus(),d={el:a(this).parent().addClass("colorpicker_slider"),max:this.parentNode.className.indexOf("_hsb_h")>0?360:this.parentNode.className.indexOf("_hsb")>0?100:255,y:b.pageY,field:c,val:parseInt(c.val(),10),preview:a(this).parent().parent().data("colorpicker").livePreview};a(document).bind("mouseup",d,r),a(document).bind("mousemove",d,q)},q=function(a){return a.data.field.val(Math.max(0,Math.min(a.data.max,parseInt(a.data.val+a.pageY-a.data.y,10)))),a.data.preview&&m.apply(a.data.field.get(0),[!0]),!1},r=function(b){return m.apply(b.data.field.get(0),[!0]),b.data.el.removeClass("colorpicker_slider").find("input").focus(),a(document).unbind("mouseup",r),a(document).unbind("mousemove",q),!1},s=function(b){var c={cal:a(this).parent(),y:a(this).offset().top};c.preview=c.cal.data("colorpicker").livePreview,a(document).bind("mouseup",c,u),a(document).bind("mousemove",c,t)},t=function(a){return m.apply(a.data.cal.data("colorpicker").fields.eq(4).val(parseInt(360*(150-Math.max(0,Math.min(150,a.pageY-a.data.y)))/150,10)).get(0),[a.data.preview]),!1},u=function(b){return e(b.data.cal.data("colorpicker").color,b.data.cal.get(0)),
g(b.data.cal.data("colorpicker").color,b.data.cal.get(0)),a(document).unbind("mouseup",u),a(document).unbind("mousemove",t),!1},v=function(b){var c={cal:a(this).parent(),pos:a(this).offset()};c.preview=c.cal.data("colorpicker").livePreview,a(document).bind("mouseup",c,x),a(document).bind("mousemove",c,w)},w=function(a){return m.apply(a.data.cal.data("colorpicker").fields.eq(6).val(parseInt(100*(150-Math.max(0,Math.min(150,a.pageY-a.data.pos.top)))/150,10)).end().eq(5).val(parseInt(100*Math.max(0,Math.min(150,a.pageX-a.data.pos.left))/150,10)).get(0),[a.data.preview]),!1},x=function(b){return e(b.data.cal.data("colorpicker").color,b.data.cal.get(0)),g(b.data.cal.data("colorpicker").color,b.data.cal.get(0)),a(document).unbind("mouseup",x),a(document).unbind("mousemove",w),!1},y=function(b){a(this).addClass("colorpicker_focus")},z=function(b){a(this).removeClass("colorpicker_focus")},A=function(b){var c=a(this).parent(),d=c.data("colorpicker").color;c.data("colorpicker").origColor=d,j(d,c.get(0)),c.data("colorpicker").onSubmit(d,N(d),L(d),c.data("colorpicker").el)},B=function(b){var c=a("#"+a(this).data("colorpickerId"));c.data("colorpicker").onBeforeShow.apply(this,[c.get(0)]);var d=a(this).offset(),e=E(),f=d.top+this.offsetHeight,g=d.left;return f+176>e.t+e.h&&(f-=this.offsetHeight+176),g+356>e.l+e.w&&(g-=356),c.css({left:g+"px",top:f+"px"}),0!=c.data("colorpicker").onShow.apply(this,[c.get(0)])&&c.show(),a(document).bind("mousedown",{cal:c},C),!1},C=function(b){D(b.data.cal.get(0),b.target,b.data.cal.get(0))||(0!=b.data.cal.data("colorpicker").onHide.apply(this,[b.data.cal.get(0)])&&b.data.cal.hide(),a(document).unbind("mousedown",C))},D=function(a,b,c){if(a==b)return!0;if(a.contains)return a.contains(b);if(a.compareDocumentPosition)return!!(16&a.compareDocumentPosition(b));for(var d=b.parentNode;d&&d!=c;){if(d==a)return!0;d=d.parentNode}return!1},E=function(){var a="CSS1Compat"==document.compatMode;return{l:window.pageXOffset||(a?document.documentElement.scrollLeft:document.body.scrollLeft),t:window.pageYOffset||(a?document.documentElement.scrollTop:document.body.scrollTop),w:window.innerWidth||(a?document.documentElement.clientWidth:document.body.clientWidth),h:window.innerHeight||(a?document.documentElement.clientHeight:document.body.clientHeight)}},F=function(a){return{h:Math.min(360,Math.max(0,a.h)),s:Math.min(100,Math.max(0,a.s)),b:Math.min(100,Math.max(0,a.b))}},G=function(a){return{r:Math.min(255,Math.max(0,a.r)),g:Math.min(255,Math.max(0,a.g)),b:Math.min(255,Math.max(0,a.b))}},H=function(a){var b=6-a.length;if(b>0){for(var c=[],d=0;b>d;d++)c.push("0");c.push(a),a=c.join("")}return a},I=function(a){var a=parseInt(a.indexOf("#")>-1?a.substring(1):a,16);return{r:a>>16,g:(65280&a)>>8,b:255&a}},J=function(a){return K(I(a))},K=function(a){var b={h:0,s:0,b:0},c=Math.min(a.r,a.g,a.b),d=Math.max(a.r,a.g,a.b),e=d-c;return b.b=d,b.s=0!=d?255*e/d:0,0!=b.s?a.r==d?b.h=(a.g-a.b)/e:a.g==d?b.h=2+(a.b-a.r)/e:b.h=4+(a.r-a.g)/e:b.h=-1,b.h*=60,b.h<0&&(b.h+=360),b.s*=100/255,b.b*=100/255,b},L=function(a){var b={},c=Math.round(a.h),d=Math.round(255*a.s/100),e=Math.round(255*a.b/100);if(0==d)b.r=b.g=b.b=e;else{var f=e,g=(255-d)*e/255,h=(f-g)*(c%60)/60;360==c&&(c=0),60>c?(b.r=f,b.b=g,b.g=g+h):120>c?(b.g=f,b.b=g,b.r=f-h):180>c?(b.g=f,b.r=g,b.b=g+h):240>c?(b.b=f,b.r=g,b.g=f-h):300>c?(b.b=f,b.g=g,b.r=g+h):360>c?(b.r=f,b.g=g,b.b=f-h):(b.r=0,b.g=0,b.b=0)}return{r:Math.round(b.r),g:Math.round(b.g),b:Math.round(b.b)}},M=function(b){var c=[b.r.toString(16),b.g.toString(16),b.b.toString(16)];return a.each(c,function(a,b){1==b.length&&(c[a]="0"+b)}),c.join("")},N=function(a){return M(L(a))},O=function(){var b=a(this).parent(),c=b.data("colorpicker").origColor;b.data("colorpicker").color=c,e(c,b.get(0)),g(c,b.get(0)),f(c,b.get(0)),h(c,b.get(0)),i(c,b.get(0)),k(c,b.get(0))};return{init:function(b){if(b=a.extend({},d,b||{}),"string"==typeof b.color)b.color=J(b.color);else if(void 0!=b.color.r&&void 0!=b.color.g&&void 0!=b.color.b)b.color=K(b.color);else{if(void 0==b.color.h||void 0==b.color.s||void 0==b.color.b)return this;b.color=F(b.color)}return this.each(function(){if(!a(this).data("colorpickerId")){var d=a.extend({},b);d.origColor=b.color;var q="collorpicker_"+parseInt(1e3*Math.random());a(this).data("colorpickerId",q);var r=a(c).attr("id",q);d.flat?r.appendTo(this).show():r.appendTo(document.body),d.fields=r.find("input").bind("keyup",l).bind("change",m).bind("blur",n).bind("focus",o),r.find("span").bind("mousedown",p).end().find(">div.colorpicker_current_color").bind("click",O),d.selector=r.find("div.colorpicker_color").bind("mousedown",v),d.selectorIndic=d.selector.find("div div"),d.el=this,d.hue=r.find("div.colorpicker_hue div"),r.find("div.colorpicker_hue").bind("mousedown",s),d.newColor=r.find("div.colorpicker_new_color"),d.currentColor=r.find("div.colorpicker_current_color"),r.data("colorpicker",d),r.find("div.colorpicker_submit").bind("mouseenter",y).bind("mouseleave",z).bind("click",A),e(d.color,r.get(0)),f(d.color,r.get(0)),g(d.color,r.get(0)),i(d.color,r.get(0)),h(d.color,r.get(0)),j(d.color,r.get(0)),k(d.color,r.get(0)),d.flat?r.css({position:"relative",display:"block"}):a(this).bind(d.eventName,B)}})},showPicker:function(){return this.each(function(){a(this).data("colorpickerId")&&B.apply(this)})},hidePicker:function(){return this.each(function(){a(this).data("colorpickerId")&&a("#"+a(this).data("colorpickerId")).hide()})},setColor:function(b){if("string"==typeof b)b=J(b);else if(void 0!=b.r&&void 0!=b.g&&void 0!=b.b)b=K(b);else{if(void 0==b.h||void 0==b.s||void 0==b.b)return this;b=F(b)}return this.each(function(){if(a(this).data("colorpickerId")){var c=a("#"+a(this).data("colorpickerId"));c.data("colorpicker").color=b,c.data("colorpicker").origColor=b,e(b,c.get(0)),f(b,c.get(0)),g(b,c.get(0)),i(b,c.get(0)),h(b,c.get(0)),j(b,c.get(0)),k(b,c.get(0))}})}}}();a.fn.extend({ColorPicker:b.init,ColorPickerHide:b.hidePicker,ColorPickerShow:b.showPicker,ColorPickerSetColor:b.setColor})}(jQuery),function(a){a.ClassyGradient=function(b,c){var d,e,f,g,h,i,j,k,l,m,n={gradient:"0% #02CDE8, 100% #000000",width:300,height:18,point:8,orientation:"vertical",target:null,onChange:function(){},onInit:function(){}},o=a(b),p=new Array;return this.settings={},this.__constructor=function(){return this.settings=a.extend({},n,c),this.update(),this.settings.onInit(),this},this.update=function(){this._setupPoints(),this._setup(),this._render()},this.getCSS=function(){var b="",c="0%",d="100%",e="left bottom",f="top";"horizontal"===this.settings.orientation&&(c="100%",d="0%",e="right top",f="left"),f=this.settings.orientation;var g='<svg xmlns="http://www.w3.org/2000/svg"><defs><linearGradient id="gradient" x1="0%" y1="0%" x2="'+c+'" y2="'+d+'">',h="-webkit-gradient(linear, left top, "+e,i="";return a.each(p,function(a,b){h+=", color-stop("+b[0]+", "+b[1]+")",i+=","+b[1]+" "+b[0],g+='<stop offset="'+b[0]+'" style="stop-color:'+b[1]+';" />'}),h+=")",i=i.substr(1),g+='</linearGradient></defs><rect fill="url(#gradient)" height="100%" width="100%" /></svg>',g=this._base64(g),b+="background: url(data:image/svg+xml;base64,"+g+");\n",b+="background: "+h+";\n",b+="background: -moz-linear-gradient("+f+","+i+");\n",b+="background: -webkit-linear-gradient("+f+","+i+");\n",b+="background: -o-linear-gradient("+f+","+i+");\n",b+="background: -ms-linear-gradient("+f+","+i+");\n",b+="background: linear-gradient("+f+","+i+");"},this.getArray=function(){return p},this.getString=function(){var b="";return a.each(p,function(a,c){b+=c[0]+" "+c[1]+","}),b=b.substr(0,b.length-1)},this.setOrientation=function(a){this.settings.orientation=a,this._renderToTarget()},this._setupPoints=function(){p=new Array,p=a.isArray(this.settings.gradient)?this.settings.gradient:this._getGradientFromString(this.settings.gradient)},this._setup=function(){var b=this;o.empty(),d=a('<div class="ClassyGradient"></div>'),e=a('<canvas class="canvas" width="'+this.settings.width+'" height="'+this.settings.height+'"></canvas>'),d.append(e),l=e.get(0).getContext("2d"),f=a('<div class="points"></div>'),f.css("width",this.settings.width+Math.round(this.settings.point/2+1)+"px"),d.append(f),g=a('<div class="info"></div>'),g.append('<div class="arrow"></div>'),d.append(g),h=a('<div class="content"></div>'),g.append(h),o.hover(function(){o.addClass("hover")},function(){o.removeClass("hover")}),i=a('<div class="point-color"><div style="background-color: #00ff00"></div></div>'),j=a('<span class="point-position">%</span>'),k=a('<a href="#" class="delete"></a>'),h.append(i,j,k),o.append(d),i.ColorPicker({color:"#00ff00",onSubmit:function(a,c,d){o.find(".point-color div").css("backgroundColor","#"+c),m.css("backgroundColor","#"+c),b._renderCanvas(),b._renderToTarget()},onChange:function(a,c,d){o.find(".point-color div").css("backgroundColor","#"+c),m.css("backgroundColor","#"+c),b._renderCanvas(),b._renderToTarget()}}),a(document).bind("click",function(){o.is(".hover")||g.hide("fast")}),e.unbind("click"),e.bind("click",function(c){var d=e.offset(),g=c.pageX-d.left;g=Math.round(100*g/b.settings.width);var h="#000000",i=999999999999;a.each(p,function(a,b){parseInt(b[0])<g&&g-parseInt(b[0])<i?(i=g-parseInt(b[0]),h=b[1]):parseInt(b[0])>g&&parseInt(b[0])-g<i&&(i=parseInt(b[0])-g,h=b[1])}),p.push([g+"%",h]),p.sort(b._sortByPosition),b._render(),a.each(p,function(a,c){c[0]==g+"%"&&b._selectPoint(f.find(".point:eq("+a+")"))})})},this._render=function(){this._initGradientPoints(),this._renderCanvas(),this._renderToTarget()},this._initGradientPoints=function(){var b=this;f.empty(),a.each(p,function(a,c){f.append('<div class="point" style="background-color: '+c[1]+"; left:"+parseInt(c[0])*b.settings.width/100+'px;"></div>')}),f.find(".point").css("width",this.settings.point+"px").css("height",this.settings.point+"px").mouseup(function(){b._selectPoint(this)}).draggable({axis:"x",containment:"parent",drag:function(){b._selectPoint(this),b._renderCanvas(),b._renderToTarget()}})},this._selectPoint=function(b){var c=this;m=a(b);var d=a(b).css("backgroundColor"),e=parseInt(a(b).css("left"));e=Math.round(e/this.settings.width*100),d=d.substr(4,d.length),d=d.substr(0,d.length-1),i.ColorPickerSetColor(this._rgbToHex(d.split(","))),i.find("div").css("backgroundColor",this._rgbToHex(d.split(","))),j.html("Position: "+e+"%"),k.unbind("click").bind("click",function(){return p.length>1&&(p.splice(m.index(),1),c._render(),o.find(".info").hide("fast")),!1}),o.find(".info").css("marginLeft",parseInt(a(b).css("left"))-30+"px").show("fast")},this._renderCanvas=function(){var b=this;p=new Array,o.find(".point").each(function(c,d){var e=Math.round(parseInt(a(d).css("left"))/b.settings.width*100),f=a(d).css("backgroundColor").substr(4,a(d).css("backgroundColor").length-5);f=b._rgbToHex(f.split(",")),p.push([e+"%",f])}),p.sort(b._sortByPosition),this._renderToCanvas(),this.settings.onChange(this.getString(),this.getCSS(),this.getArray())},this._renderToElement=function(b,c){var d="0%",f="100%",g="left bottom",i="top";(b===e||"horizontal"===this.settings.orientation)&&(d="100%",f="0%",g="right top",i="left"),i=this.settings.orientation;var j='<svg xmlns="http://www.w3.org/2000/svg"><defs><linearGradient id="gradient" x1="0%" y1="0%" x2="'+d+'" y2="'+f+'">',k="-webkit-gradient(linear, left top, "+g,l="";if(a.each(c,function(a,b){k+=", color-stop("+b[0]+", "+b[1]+")",l+=","+b[1]+" "+b[0],j+='<stop offset="'+b[0]+'" style="stop-color:'+b[1]+';" />'}),k+=")",l=l.substr(1),j+="</linearGradient></defs>",b===h){var m=parseInt(h.css("borderRadius"));j+='<rect fill="url(#gradient)" height="100%" width="100%" rx="'+m+'" ry="'+m+'" />'}else j+='<rect fill="url(#gradient)" height="100%" width="100%" />';j+="</svg>",j=this._base64(j),b.css("background","url(data:image/svg+xml;base64,"+j+")"),b.css("background",k),b.css("background","-moz-linear-gradient("+i+","+l+")"),b.css("background","-webkit-linear-gradient("+i+","+l+")"),b.css("background","-o-linear-gradient("+i+","+l+")"),b.css("background","-ms-linear-gradient("+i+","+l+")"),b.css("background","linear-gradient("+i+","+l+")")},this._renderToTarget=function(){null!==this.settings.target&&this._renderToElement(a(this.settings.target),p)},this._renderToCanvas=function(){var b=l.createLinearGradient(0,0,this.settings.width,0);a.each(p,function(a,c){b.addColorStop(parseInt(c[0])/100,c[1])}),l.clearRect(0,0,this.settings.width,this.settings.height),l.fillStyle=b,l.fillRect(0,0,this.settings.width,this.settings.height),this.settings.onChange(this.getString(),this.getCSS(),this.getArray())},this._getGradientFromString=function(b){var c=new Array,d=b.split(",");return a.each(d,function(a,b){var d;"100"==b.substr(b.indexOf("%")-3,b.indexOf("%"))||"100%"==b.substr(b.indexOf("%")-3,b.indexOf("%"))?d="100%":b.indexOf("%")>1?(d=parseInt(b.substr(b.indexOf("%")-2,b.indexOf("%"))),d+="%"):(d=parseInt(b.substr(b.indexOf("%")-1,b.indexOf("%"))),d+="%");var e=b.substr(b.indexOf("#"),7);c.push([d,e])}),c},this._rgbToHex=function(a){function b(a){return a=parseInt(a,10),isNaN(a)?"00":(a=Math.max(0,Math.min(a,255)),"0123456789ABCDEF".charAt((a-a%16)/16)+"0123456789ABCDEF".charAt(a%16))}var c=a[0],d=a[1],e=a[2];return"#"+b(c)+b(d)+b(e)},this._sortByPosition=function(a,b){return parseInt(a[0])<parseInt(b[0])?-1:parseInt(a[0])>parseInt(b[0])?1:0},this._base64=function(a){for(var b,c,d,e,f,g,h,i="ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789+/=",j="",k=0;k<a.length;)b=a.charCodeAt(k++),c=a.charCodeAt(k++),d=a.charCodeAt(k++),e=b>>2,f=(3&b)<<4|c>>4,g=(15&c)<<2|d>>6,h=63&d,isNaN(c)?g=h=64:isNaN(d)&&(h=64),j+=i.charAt(e)+i.charAt(f)+i.charAt(g)+i.charAt(h);return j},this.__constructor()},a.fn.ClassyGradient=function(b){return this.each(function(){if(void 0===a(this).data("ClassyGradient")){var c=new a.ClassyGradient(this,b);a(this).data("ClassyGradient",c)}})}}(jQuery),!function(a){a(document).ready(function(){if("undefined"==typeof vc||"undefined"==typeof window.VcColumnView)return!1;window.ULTHotspotSingleView=vc.shortcode_view.extend({editElement:function(b){_.isObject(b)&&b.preventDefault(),window.ULTHotspotSingleView.__super__.editElement.call(this,b),this.model.get("params");var c=this.$el,d=c.parent().attr("data-hotspot-image");if(void 0==c.attr("data-latest-img")||0===c.attr("data-latest-img").length)var e=d;else var e=c.attr("data-latest-img");if(c.attr("data-hotspot-image",d),void 0==c.parent().attr("data-hotspot-link")||0==c.parent().attr("data-hotspot-link").length||e!=d)a.ajax({type:"POST",url:window.ajaxurl,data:{action:"wpb_single_image_src",content:d,size:"full",_vcnonce:window.vcAdminNonce},dataType:"html",success:function(a){ULT_H_img_ID=d,ULT_H_img_link=a,c.attr("data-hotspot-link",a),c.attr("data-latest-img",d)}});else{var f=c.parent().attr("data-hotspot-link");ULT_H_img_link=f,ULT_H_img_ID=c.parent().attr("data-hotspot-image")}ULT_H_Size=c.parent().attr("data-hotspot-size"),ULT_H_custom_size=c.parent().attr("data-hotspot-custom")}});var b=vc.shortcodes;window.ULTHotspotContainerView=window.VcColumnView.extend({buildDesignHelpers:function(){var c=this.model.get("params"),d=this.$el,e=(d.attr("data-model-id"),c.main_img),f=c.main_img_size,g=c.main_img_width;"undefined"!=typeof c.main_img_width&&(g=c.main_img_width),b.where({parent_id:this.model.id}),_.isEmpty(e)||(d.find("> .wpb_element_wrapper .wpb_column_container").attr("data-hotspot-image",e),d.find("> .wpb_element_wrapper .wpb_column_container").attr("data-hotspot-size",f),d.find("> .wpb_element_wrapper .wpb_column_container").attr("data-hotspot-custom",g),d.attr("data-hotspot-image",e),d.attr("data-hotspot-size",f),d.attr("data-hotspot-custom",g),a.ajax({type:"POST",url:window.ajaxurl,data:{action:"wpb_single_image_src",content:e,size:"full",_vcnonce:window.vcAdminNonce},dataType:"html",success:function(a){d.find("> .wpb_element_wrapper .wpb_column_container").attr("data-hotspot-link",a),d.attr("data-hotspot-link",a)}}))},addElement:function(a){_.isObject(a)&&a.preventDefault();var b=this.$el.attr("data-hotspot-image"),c=this.$el.attr("data-hotspot-link"),d=this.$el.attr("data-hotspot-size"),e=this.$el.attr("data-hotspot-custom");ULT_H_img_ID=b,ULT_H_img_link=c,ULT_H_Size=d,ULT_H_custom_size=e,window.ULTHotspotContainerView.__super__.addElement.call(this,a)}})})}(jQuery);
(function($)
{
	"use strict";
	$.SmileTrigger = $.SmileTrigger || {};
	$.SmileTrigger.wp_media = $.SmileTrigger.wp_media || [];
	$.SmileTrigger.media_new =  function()
	{
		var $body = $("body");
		$body.on('click', '.smile_upload_icon', $.SmileTrigger.media_new_activate );
	};
	//intended for zip files only. if needed should be easy to expand in the future
	$.SmileTrigger.media_new_activate = function( event )
	{
		event.preventDefault();
		var clicked = $(this), options = clicked.data();
		options.input_target = $('#'+options.target);
		// Create the media frame.
		var file_frame = wp.media(
		{
			frame:   options.frame,
			library: { type: options.type },
			button:  { text: options.button },
			className: options['class']
		});
		file_frame.on( 'select update insert', function(){ $.SmileTrigger.media_new_insert( file_frame , options); });
		//open the media frame
		file_frame.open();
	};
	//insert the url of the zip file
	$.SmileTrigger.media_new_insert = function( file_frame , options )
	{
		var state = file_frame.state(), selection = state.get('selection').first().toJSON();
		options.input_target.val(selection.id).trigger('change')
		$("body").trigger(options.trigger, [selection, options]);
	}
	$(document).ready(function () 
	{
		$.SmileTrigger.media_new();
		//Fonts Zip file upload
		$("body").on('smile_insert_zip', $.SmileTrigger.icon_insert);
		//font manager
		$("body").on('click', '.smile_del_icon', $.SmileTrigger.icon_remove);
	});
/************************************************************************
EXTRA FUNCTIONS, NOT NECESSARY FOR THE DEFAULT UPLOAD
*************************************************************************/
	$.SmileTrigger.icon_insert = function(event, selection, options)
	{
		// clean the options field, we dont need to save a value
		options.input_target.val("");
		var manager = $('.smile_iconfont_manager');
		var msg = $('#msg');
		if(selection.subtype !== 'zip')
		{
			$('.spinner').hide();
			msg.html("<div class='error'><p>Please upload a valid ZIP file.<br/>You can create the file on icomoon.io</p></div>");
			msg.show();
			setTimeout(function() {
				msg.slideUp();
			}, 5000);
			return;
		}
		// send request to server to extract the zip file, re arrange the content and save a config file
		$.ajax({
				type: "POST",
				url: ajaxurl,
				data: 
				{
					action: 'smile_ajax_add_zipped_font',
					values: selection,
				},
				beforeSend: function()
				{
					$('.spinner').css({opacity:0, display:"block", visibility:'visible',position:'absolute', top:'21px', left:'345px'}).animate({opacity:1});
				},
				/*error: function()
				{
					alert('Couldn\'t add the font because the server didn’t respond.<br/>Please reload the page, then try again');
				},*/
				success: function(response)
				{
					$('.spinner').hide();
					if(response.match(/smile_font_added/))
					{
						msg.html("<div class='updated'><p>Font icon added successfully! Reloading the page... </p></div>");
						msg.show();
						setTimeout(function() {
							msg.slideUp();
							location.reload();
						}, 5000);
					}
					else
					{
						msg.html("<div class='error'><p>Couldn't add the font.<br/>The script returned the following error: "+response+"</p></div>");
						msg.show();
						setTimeout(function() {
							  msg.slideUp();
						}, 5000);
					}
					if(typeof console != 'undefined') console.log(response);
					//msg.fadeOut('slow');
				}
			});
	}
	$.SmileTrigger.icon_remove = function(event)
	{
		event.preventDefault();
		var button 		= $(this),
			parent		= button.parents('.smile-available-font:eq(0)'),
			manager		= button.parents('.smile_iconfont_manager:eq(0)'),
			all_fonts	= manager.find('.smile-available-font'),
			del_font	= button.data('delete');
		//alert(del_font);
		var msg = $('#msg');
		// send request to server to remove the folder and the database entry
		$.ajax({
			type: "POST",
			url: ajaxurl,
			data: 
			{
				action: 'smile_ajax_remove_zipped_font',
				del_font: del_font,
			},
			beforeSend: function()
			{
					$('.spinner').css({opacity:0, display:"block", visibility:'visible',position:'absolute', top:'21px', left:'345px'}).animate({opacity:1});
			},
			error: function()
			{
				$('.spinner').hide();
				msg.html("<div class='error'><p>Couldn't remove the font because the server didn’t respond.<br/>Please reload the page, then try again</p></div>");
				msg.show();
				setTimeout(function() {
					  msg.slideUp();
				}, 5000);
			},
			success: function(response)
			{
				$('.spinner').hide();
				if(response.match(/smile_font_removed/))
				{
					msg.html("<div class='updated'><p>Icon set deleted successfully! Reloading the page...</p></div>");
					msg.show();
					setTimeout(function() {
						  msg.slideUp();
						  location.reload();
					}, 5000);
				}
				else
				{
					msg.html("<p><div class='error'><p>Couldn't remove the font.<br/>Reloading the page...</p></div>");
					msg.show();
					setTimeout(function() {
						msg.slideUp();
						location.reload();
					}, 5000);
				}
				if(typeof console != 'undefined') console.log(response);
				//msg.fadeOut('slow');
			},
			complete: function(response)
			{	
				//alert(response);
			}
		});
	}
})(jQuery);





































(function ( $ ) {
	jQuery(document).ready(function(){

		if(/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent)) {
			$('html').addClass('ult-remove-fixed-background');
		}

		jQuery(window).scroll(function(){
			vc_viewport_video();
		});

		jQuery(window).load(function(){
			vc_viewport_video();
		});

		 function vc_viewport_video()
			{
				if(/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent))
					return false;
				jQuery('.enable-on-viewport').each(function(index, element) {
					var is_on_viewport = jQuery(this).isVdoOnScreen();
					if(jQuery(this).hasClass('hosted-video') && (!jQuery(this).hasClass('override-controls')))
					{
						if(is_on_viewport)
						{
							jQuery(this)[0].play();
							jQuery(this).parent().parent().parent().find('.video-controls').attr('data-action','play');
							jQuery(this).parent().parent().parent().find('.video-controls').html('<i class="ult-vid-cntrlpause"></i>');
						}
						else
						{
							jQuery(this)[0].pause();
							jQuery(this).parent().parent().parent().find('.video-controls').attr('data-action','pause');
							jQuery(this).parent().parent().parent().find('.video-controls').html('<i class="ult-vid-cntrlplay"></i>');
						}
					}
				});
			}

			function ultHexToRgb(hex) {
	    		// Expand shorthand form (e.g. "03F") to full form (e.g. "0033FF")
			    var shorthandRegex = /^#?([a-f\d])([a-f\d])([a-f\d])$/i;
			    hex = hex.replace(shorthandRegex, function(m, r, g, b) {
			        return r + r + g + g + b + b;
			    });

			    var result = /^#?([a-f\d]{2})([a-f\d]{2})([a-f\d]{2})$/i.exec(hex);
			    return result ? {
			        r: parseInt(result[1], 16),
			        g: parseInt(result[2], 16),
			        b: parseInt(result[3], 16)
			    } : null;
			}

			/* function for seperators */
			function ult_vc_seperators(selector, parent)
			{
				/* seperators */
				var seperator = selector.data('seperator');
				var seperator_type = selector.data('seperator-type');
				var seperator_shape_size = selector.data('seperator-shape-size');
				var seperator_background_color = selector.data('seperator-background-color');
				var seperator_border = selector.data('seperator-border');
				var seperator_border_color = selector.data('seperator-border-color');
				var seperator_border_width = selector.data('seperator-border-width');
				var seperator_svg_height = selector.data('seperator-svg-height');
				var seperator_full_width = selector.data('seperator-full-width');
				var seperator_position = selector.data('seperator-position');
				if(typeof seperator_position == 'undefined' || seperator_position == '')
					seperator_position = 'top_seperator';

				var icon = selector.data('icon');

				if(typeof icon == 'undefined')
					icon = '';
				else
					icon = '<div class="separator-icon">'+icon+'</div>';

				var seperator_css_main = seperator_class = seperator_border_css = seperator_border_line_css = seperator_css = '';
				if(typeof seperator != 'undefined' && seperator.toString() == 'true')
				{
					var css = shape_css = svg = inner_html = seperator_css = shape_css = '';
					var is_svg = false;

					var uniqid = Math.floor( Math.random()*9999999999999);
					var uniqclass = 'uvc-seperator-'+uniqid;

					if(typeof seperator_shape_size == 'undefined' || seperator_shape_size == '' || seperator_shape_size == 'undefined')
							seperator_shape_size = 0;

					seperator_shape_size = parseInt(seperator_shape_size);
					var half_shape = seperator_shape_size/2;
					var half_border = 0;

					if(seperator_type == 'triangle_seperator')
						seperator_class = 'ult-trinalge-seperator';
					else if(seperator_type == 'circle_seperator')
						seperator_class = 'ult-circle-seperator';
					else if(seperator_type == 'diagonal_seperator')
						seperator_class = 'ult-double-diagonal';
					else if(seperator_type == 'triangle_svg_seperator')
					{
						seperator_class = 'ult-svg-triangle';
						svg = '<svg class="uvc-svg-triangle" xmlns="http://www.w3.org/2000/svg" version="1.1" fill="'+seperator_background_color+'" width="100%" height="'+seperator_svg_height+'" viewBox="0 0 0.156661 0.1"><polygon points="0.156661,3.93701e-006 0.156661,0.000429134 0.117665,0.05 0.0783307,0.0999961 0.0389961,0.05 -0,0.000429134 -0,3.93701e-006 0.0783307,3.93701e-006 "/></svg>';
						is_svg = true;
					}
					else if(seperator_type == 'circle_svg_seperator')
					{
						seperator_class = 'ult-svg-circle';
						svg = '<svg class="uvc-svg-circle" xmlns="http://www.w3.org/2000/svg" version="1.1" fill="'+seperator_background_color+'" width="100%" height="'+seperator_svg_height+'" viewBox="0 0 0.2 0.1"><path d="M0.200004 0c-3.93701e-006,0.0552205 -0.0447795,0.1 -0.100004,0.1 -0.0552126,0 -0.0999921,-0.0447795 -0.1,-0.1l0.200004 0z"/></svg>';
						is_svg = true;
					}
					else if(seperator_type == 'xlarge_triangle_seperator')
					{
						seperator_class = 'ult-xlarge-triangle';
						svg = '<svg class="uvc-x-large-triangle" xmlns="http://www.w3.org/2000/svg" version="1.1" fill="'+seperator_background_color+'" width="100%" height="'+seperator_svg_height+'" viewBox="0 0 4.66666 0.333331" preserveAspectRatio="none"><path class="fil0" d="M-0 0.333331l4.66666 0 0 -3.93701e-006 -2.33333 0 -2.33333 0 0 3.93701e-006zm0 -0.333331l4.66666 0 0 0.166661 -4.66666 0 0 -0.166661zm4.66666 0.332618l0 -0.165953 -4.66666 0 0 0.165953 1.16162 -0.0826181 1.17171 -0.0833228 1.17171 0.0833228 1.16162 0.0826181z"/></svg>';
						is_svg = true;
					}
					else if(seperator_type == 'xlarge_triangle_left_seperator')
					{
						seperator_class = 'ult-xlarge-triangle-left';
						svg = '<svg class="uvc-x-large-triangle-left" xmlns="http://www.w3.org/2000/svg" version="1.1" fill="'+seperator_background_color+'" width="100%" height="'+seperator_svg_height+'" viewBox="0 0 2000 90" preserveAspectRatio="none"><polygon xmlns="http://www.w3.org/2000/svg" points="535.084,64.886 0,0 0,90 2000,90 2000,0 "></polygon></svg>';
						is_svg = true;
					}
					else if(seperator_type == 'xlarge_triangle_right_seperator')
					{
						seperator_class = 'ult-xlarge-triangle-right';
						svg = '<svg class="uvc-x-large-triangle-right" xmlns="http://www.w3.org/2000/svg" version="1.1" fill="'+seperator_background_color+'" width="100%" height="'+seperator_svg_height+'" viewBox="0 0 2000 90" preserveAspectRatio="none"><polygon xmlns="http://www.w3.org/2000/svg" points="535.084,64.886 0,0 0,90 2000,90 2000,0 "></polygon></svg>';
						is_svg = true;
					}
					else if(seperator_type == 'xlarge_circle_seperator')
					{
						seperator_class = 'ult-xlarge-circle';
						svg = '<svg class="uvc-x-large-circle" xmlns="http://www.w3.org/2000/svg" version="1.1" fill="'+seperator_background_color+'" width="100%" height="'+seperator_svg_height+'" viewBox="0 0 4.66666 0.333331" preserveAspectRatio="none"><path class="fil1" d="M4.66666 0l0 7.87402e-006 -3.93701e-006 0c0,0.0920315 -1.04489,0.166665 -2.33333,0.166665 -1.28844,0 -2.33333,-0.0746339 -2.33333,-0.166665l-3.93701e-006 0 0 -7.87402e-006 4.66666 0z"/></svg>';
						is_svg = true;
					}
					else if(seperator_type == 'curve_up_seperator')
					{
						seperator_class = 'ult-curve-up-seperator';
						svg = '<svg class="curve-up-inner-seperator uvc-curve-up-seperator" xmlns="http://www.w3.org/2000/svg" version="1.1" fill="'+seperator_background_color+'" width="100%" height="'+seperator_svg_height+'" viewBox="0 0 4.66666 0.333331" preserveAspectRatio="none"><path class="fil0" d="M-7.87402e-006 0.0148858l0.00234646 0c0.052689,0.0154094 0.554437,0.154539 1.51807,0.166524l0.267925 0c0.0227165,-0.00026378 0.0456102,-0.000582677 0.0687992,-0.001 1.1559,-0.0208465 2.34191,-0.147224 2.79148,-0.165524l0.0180591 0 0 0.166661 -7.87402e-006 0 0 0.151783 -4.66666 0 0 -0.151783 -7.87402e-006 0 0 -0.166661z"/></svg>';
						is_svg = true;
					}
					else if(seperator_type == 'curve_down_seperator')
					{
						seperator_class = 'ult-curve-down-seperator';
						svg = '<svg class="curve-down-inner-seperator uvc-curve-down-seperator" xmlns="http://www.w3.org/2000/svg" version="1.1" fill="'+seperator_background_color+'" width="100%" height="'+seperator_svg_height+'" viewBox="0 0 4.66666 0.333331" preserveAspectRatio="none"><path class="fil0" d="M-7.87402e-006 0.0148858l0.00234646 0c0.052689,0.0154094 0.554437,0.154539 1.51807,0.166524l0.267925 0c0.0227165,-0.00026378 0.0456102,-0.000582677 0.0687992,-0.001 1.1559,-0.0208465 2.34191,-0.147224 2.79148,-0.165524l0.0180591 0 0 0.166661 -7.87402e-006 0 0 0.151783 -4.66666 0 0 -0.151783 -7.87402e-006 0 0 -0.166661z"/></svg>';
						is_svg = true;
					}
					else if(seperator_type == 'tilt_left_seperator')
					{
						seperator_class = 'ult-tilt-left-seperator';
						svg = '<svg class="uvc-tilt-left-seperator" xmlns="http://www.w3.org/2000/svg" version="1.1" fill="'+seperator_background_color+'" width="100%" height="'+seperator_svg_height+'" viewBox="0 0 4 0.266661" preserveAspectRatio="none"><polygon class="fil0" points="4,0 4,0.266661 -0,0.266661 "/></svg>';
						is_svg = true;
					}
					else if(seperator_type == 'tilt_right_seperator')
					{
						seperator_class = 'ult-tilt-right-seperator';
						svg = '<svg class="uvc-tilt-right-seperator" xmlns="http://www.w3.org/2000/svg" version="1.1" fill="'+seperator_background_color+'" width="100%" height="'+seperator_svg_height+'" viewBox="0 0 4 0.266661" preserveAspectRatio="none"><polygon class="fil0" points="4,0 4,0.266661 -0,0.266661 "/></svg>';
						is_svg = true;
					}
					else if(seperator_type == 'waves_seperator')
					{
						seperator_class = 'ult-wave-seperator';
						svg = '<svg class="wave-inner-seperator uvc-wave-seperator" xmlns="http://www.w3.org/2000/svg" version="1.1" fill="'+seperator_background_color+'" width="100%" height="'+seperator_svg_height+'" viewBox="0 0 6 0.1" preserveAspectRatio="none"><path d="M0.199945 0c3.93701e-006,0.0552205 0.0447795,0.1 0.100004,0.1l-0.200008 0c-0.0541102,0 -0.0981929,-0.0430079 -0.0999409,-0.0967008l0 0.0967008 0.0999409 0c0.0552244,0 0.1,-0.0447795 0.100004,-0.1zm0.200004 0c7.87402e-006,0.0552205 0.0447874,0.1 0.1,0.1l-0.2 0c0.0552126,0 0.0999921,-0.0447795 0.1,-0.1zm0.200004 0c3.93701e-006,0.0552205 0.0447795,0.1 0.100004,0.1l-0.200008 0c0.0552244,0 0.1,-0.0447795 0.100004,-0.1zm0.200004 0c7.87402e-006,0.0552205 0.0447874,0.1 0.1,0.1l-0.2 0c0.0552126,0 0.0999921,-0.0447795 0.1,-0.1zm0.200004 0c3.93701e-006,0.0552205 0.0447795,0.1 0.100004,0.1l-0.200008 0c0.0552244,0 0.1,-0.0447795 0.100004,-0.1zm0.200004 0c7.87402e-006,0.0552205 0.0447874,0.1 0.1,0.1l-0.2 0c0.0552126,0 0.0999921,-0.0447795 0.1,-0.1zm0.200004 0c3.93701e-006,0.0552205 0.0447795,0.1 0.100004,0.1l-0.200008 0c0.0552244,0 0.1,-0.0447795 0.100004,-0.1zm0.200004 0c7.87402e-006,0.0552205 0.0447874,0.1 0.1,0.1l-0.2 0c0.0552126,0 0.0999921,-0.0447795 0.1,-0.1zm0.200004 0c3.93701e-006,0.0552205 0.0447795,0.1 0.100004,0.1l-0.200008 0c0.0552244,0 0.1,-0.0447795 0.100004,-0.1zm0.200004 0c7.87402e-006,0.0552205 0.0447874,0.1 0.1,0.1l-0.2 0c0.0552126,0 0.0999921,-0.0447795 0.1,-0.1zm2.00004 0c7.87402e-006,0.0552205 0.0447874,0.1 0.1,0.1l-0.2 0c0.0552126,0 0.0999921,-0.0447795 0.1,-0.1zm-0.1 0.1l-0.200008 0c-0.0552126,0 -0.0999921,-0.0447795 -0.1,-0.1 -7.87402e-006,0.0552205 -0.0447874,0.1 -0.1,0.1l0.2 0c0.0552244,0 0.1,-0.0447795 0.100004,-0.1 3.93701e-006,0.0552205 0.0447795,0.1 0.100004,0.1zm-0.400008 0l-0.200008 0c-0.0552126,0 -0.0999921,-0.0447795 -0.1,-0.1 -7.87402e-006,0.0552205 -0.0447874,0.1 -0.1,0.1l0.2 0c0.0552244,0 0.1,-0.0447795 0.100004,-0.1 3.93701e-006,0.0552205 0.0447795,0.1 0.100004,0.1zm-0.400008 0l-0.200008 0c-0.0552126,0 -0.0999921,-0.0447795 -0.1,-0.1 -7.87402e-006,0.0552205 -0.0447874,0.1 -0.1,0.1l0.2 0c0.0552244,0 0.1,-0.0447795 0.100004,-0.1 3.93701e-006,0.0552205 0.0447795,0.1 0.100004,0.1zm-0.400008 0l-0.200008 0c-0.0552126,0 -0.0999921,-0.0447795 -0.1,-0.1 -7.87402e-006,0.0552205 -0.0447874,0.1 -0.1,0.1l0.2 0c0.0552244,0 0.1,-0.0447795 0.100004,-0.1 3.93701e-006,0.0552205 0.0447795,0.1 0.100004,0.1zm-0.400008 0l-0.200008 0c0.0552244,0 0.1,-0.0447795 0.100004,-0.1 3.93701e-006,0.0552205 0.0447795,0.1 0.100004,0.1zm1.90004 -0.1c3.93701e-006,0.0552205 0.0447795,0.1 0.100004,0.1l-0.200008 0c0.0552244,0 0.1,-0.0447795 0.100004,-0.1zm0.200004 0c7.87402e-006,0.0552205 0.0447874,0.1 0.1,0.1l-0.2 0c0.0552126,0 0.0999921,-0.0447795 0.1,-0.1zm0.200004 0c3.93701e-006,0.0552205 0.0447795,0.1 0.100004,0.1l-0.200008 0c0.0552244,0 0.1,-0.0447795 0.100004,-0.1zm0.200004 0c7.87402e-006,0.0552205 0.0447874,0.1 0.1,0.1l-0.2 0c0.0552126,0 0.0999921,-0.0447795 0.1,-0.1zm0.200004 0c3.93701e-006,0.0552205 0.0447795,0.1 0.100004,0.1l-0.200008 0c0.0552244,0 0.1,-0.0447795 0.100004,-0.1zm0.200004 0c7.87402e-006,0.0552205 0.0447874,0.1 0.1,0.1l-0.2 0c0.0552126,0 0.0999921,-0.0447795 0.1,-0.1zm0.200004 0c3.93701e-006,0.0552205 0.0447795,0.1 0.100004,0.1l-0.200008 0c0.0552244,0 0.1,-0.0447795 0.100004,-0.1zm0.200004 0c7.87402e-006,0.0552205 0.0447874,0.1 0.1,0.1l-0.2 0c0.0552126,0 0.0999921,-0.0447795 0.1,-0.1zm0.200004 0c3.93701e-006,0.0552205 0.0447795,0.1 0.100004,0.1l-0.200008 0c0.0552244,0 0.1,-0.0447795 0.100004,-0.1zm0.199945 0.00329921l0 0.0967008 -0.0999409 0c0.0541102,0 0.0981929,-0.0430079 0.0999409,-0.0967008z"/></svg>';
						is_svg = true;
					}
					else if(seperator_type == 'clouds_seperator')
					{
						seperator_class = 'ult-cloud-seperator';
						svg = '<svg class="cloud-inner-seperator uvc-cloud-seperator" xmlns="http://www.w3.org/2000/svg" version="1.1" fill="'+seperator_background_color+'" width="100%" height="'+seperator_svg_height+'" viewBox="0 0 2.23333 0.1" preserveAspectRatio="none"><path class="fil0" d="M2.23281 0.0372047c0,0 -0.0261929,-0.000389764 -0.0423307,-0.00584252 0,0 -0.0356181,0.0278268 -0.0865354,0.0212205 0,0 -0.0347835,-0.00524803 -0.0579094,-0.0283701 0,0 -0.0334252,0.0112677 -0.0773425,-0.00116929 0,0 -0.0590787,0.0524724 -0.141472,0.000779528 0,0 -0.0288189,0.0189291 -0.0762362,0.0111535 -0.00458268,0.0141024 -0.0150945,0.040122 -0.0656811,0.0432598 -0.0505866,0.0031378 -0.076126,-0.0226614 -0.0808425,-0.0308228 -0.00806299,0.000854331 -0.0819961,0.0186969 -0.111488,-0.022815 -0.0076378,0.0114843 -0.059185,0.0252598 -0.083563,-0.000385827 -0.0295945,0.0508661 -0.111996,0.0664843 -0.153752,0.019 -0.0179843,0.00227559 -0.0571181,0.00573622 -0.0732795,-0.0152953 -0.027748,0.0419646 -0.110602,0.0366654 -0.138701,0.00688189 0,0 -0.0771732,0.0395709 -0.116598,-0.0147677 0,0 -0.0497598,0.02 -0.0773346,-0.00166929 0,0 -0.0479646,0.0302756 -0.0998937,0.00944094 0,0 -0.0252638,0.0107874 -0.0839488,0.00884646 0,0 -0.046252,0.000775591 -0.0734567,-0.0237087 0,0 -0.046252,0.0101024 -0.0769567,-0.00116929 0,0 -0.0450827,0.0314843 -0.118543,0.0108858 0,0 -0.0715118,0.0609803 -0.144579,0.00423228 0,0 -0.0385787,0.00770079 -0.0646299,0.000102362 0,0 -0.0387559,0.0432205 -0.125039,0.0206811 0,0 -0.0324409,0.0181024 -0.0621457,0.0111063l-3.93701e-005 0.0412205 2.2323 0 0 -0.0627953z"/></svg>';
						is_svg = true;
					}
					else if(seperator_type == 'multi_triangle_seperator') {
						seperator_class = 'ult-multi-trianle';
						var rgb = ultHexToRgb(seperator_background_color);
						svg = '<svg class="uvc-multi-triangle-svg" xmlns="http://www.w3.org/2000/svg" version="1.1" viewBox="0 0 100 100" preserveAspectRatio="none" width="100%" height="'+seperator_svg_height+'">\
				            <path class="large left" d="M0 0 L50 50 L0 100" fill="rgba('+rgb.r+','+rgb.g+','+rgb.b+', .1)"></path>\
				            <path class="large right" d="M100 0 L50 50 L100 100" fill="rgba('+rgb.r+','+rgb.g+','+rgb.b+', .1)"></path>\
				            <path class="medium left" d="M0 100 L50 50 L0 33.3" fill="rgba('+rgb.r+','+rgb.g+','+rgb.b+', .3)"></path>\
				            <path class="medium right" d="M100 100 L50 50 L100 33.3" fill="rgba('+rgb.r+','+rgb.g+','+rgb.b+', .3)"></path>\
				            <path class="small left" d="M0 100 L50 50 L0 66.6" fill="rgba('+rgb.r+','+rgb.g+','+rgb.b+', .5)"></path>\
				            <path class="small right" d="M100 100 L50 50 L100 66.6" fill="rgba('+rgb.r+','+rgb.g+','+rgb.b+', .5)"></path>\
				            <path d="M0 99.9 L50 49.9 L100 99.9 L0 99.9" fill="rgba('+rgb.r+','+rgb.g+','+rgb.b+', 1)"></path>\
				            <path d="M48 52 L50 49 L52 52 L48 52" fill="rgba('+rgb.r+','+rgb.g+','+rgb.b+', 1)"></path>\
				        </svg>';
				        is_svg = true;
					}
					else if(seperator_type == 'round_split_seperator')
					{
						var temp_css = temp_border_before = temp_border_after = temp_border_line = '';
						temp_padding = 0;
						seperator_class = 'ult-rounded-split-seperator-wrapper';
						var row_height = jQuery(selector).outerHeight();

						if(seperator_shape_size != 0)
						{
							var prev_padding = parseInt(jQuery(selector).css('padding-bottom'));
							jQuery(selector).css({'padding-bottom':seperator_shape_size+'px'});
							if(prev_padding == 0)
								temp_padding = seperator_shape_size;
						}
						if(seperator_position == 'top_seperator')
						{
							var eclass = 'top-split-seperator';
							var etop = '0px';
							var ebottom = 'auto';
							var border_radius_before = 'border-radius: 0 0 '+seperator_shape_size+'px 0 !important;';
							var border_radius_after = 'border-radius: 0 0 0 '+seperator_shape_size+'px !important;';
						}
						else if(seperator_position == 'bottom_seperator')
						{
							var eclass = 'bottom-split-seperator';
							var etop = 'auto';
							var ebottom = '0px';
							var border_radius_before = 'border-radius: 0 '+seperator_shape_size+'px 0 0 !important;';
							var border_radius_after = 'border-radius: '+seperator_shape_size+'px 0 0 0 !important;';
						}
						else
						{
							var eclass = 'top-bottom-split-seperator';
							var etop_top = '0px';
							var ebottom_top = 'auto';
							var etop_bottom = 'auto';
							var ebottom_bottom = '0px';
							var border_radius_before_top = 'border-radius: 0 0 '+seperator_shape_size+'px 0 !important;';
							var border_radius_after_top = 'border-radius: 0 0 0 '+seperator_shape_size+'px !important;';
							var border_radius_before_bottom = 'border-radius: 0 '+seperator_shape_size+'px 0 0 !important;';
							var border_radius_after_bottom = 'border-radius: '+seperator_shape_size+'px 0 0 0 !important;';
						}
						inner_html = '<div class="ult-rounded-split-seperator '+eclass+'"></div>';

						if(seperator_border != 'none')
						{
							temp_border_line = seperator_border_width+'px '+seperator_border+' '+seperator_border_color;
							temp_border_before = 'border-top: '+temp_border_line+'; border-right: '+temp_border_line+';';
							temp_border_after = 'border-top: '+temp_border_line+'; border-left: '+temp_border_line+';';
						}

						if(seperator_position == 'top_seperator' || seperator_position == 'bottom_seperator')
						{
							temp_css = '<style>.'+uniqclass+' .ult-rounded-split-seperator.'+eclass+':before { background-color:'+seperator_background_color+'; height:'+seperator_shape_size+'px !important; top:'+etop+'; bottom:'+ebottom+'; '+temp_border_before+' '+border_radius_before+' } .'+uniqclass+' .ult-rounded-split-seperator.'+eclass+':after { background-color:'+seperator_background_color+'; left: 50%; height:'+seperator_shape_size+'px !important; top:'+etop+'; bottom:'+ebottom+'; '+temp_border_after+' '+border_radius_after+' }</style>';
							jQuery('head').append(temp_css);
						}
						else
						{
							temp_css = '<style>.'+uniqclass+'.top_seperator .ult-rounded-split-seperator:before { background-color:'+seperator_background_color+'; height:'+seperator_shape_size+'px !important; top:'+etop_top+'; bottom:'+ebottom_top+'; '+temp_border_before+' '+border_radius_before_top+' } .'+uniqclass+'.top_seperator .ult-rounded-split-seperator:after { background-color:'+seperator_background_color+'; left: 50%; height:'+seperator_shape_size+'px !important; top:'+etop_top+'; bottom:'+ebottom_top+'; '+temp_border_after+' '+border_radius_after_top+' }</style>';
							temp_css_bottom = '<style>.'+uniqclass+'.bottom_seperator .ult-rounded-split-seperator:before { background-color:'+seperator_background_color+'; height:'+seperator_shape_size+'px !important; top:'+etop_bottom+'; bottom:'+ebottom_bottom+'; '+temp_border_before+' '+border_radius_before_bottom+' } .'+uniqclass+'.bottom_seperator .ult-rounded-split-seperator:after { background-color:'+seperator_background_color+'; left: 50%; height:'+seperator_shape_size+'px !important; top:'+etop_bottom+'; bottom:'+ebottom_bottom+'; '+temp_border_after+' '+border_radius_after_bottom+' }</style>';
							jQuery('head').append(temp_css+temp_css_bottom);
						}
					}
					else
						seperator_class = 'ult-no-shape-seperator';

					if(typeof seperator_border_width != 'undefined' && seperator_border_width != '' && seperator_border_width != 0)
					{
						half_border = parseInt(seperator_border_width);
					}
					shape_css = 'content: "";width:'+seperator_shape_size+'px; height:'+seperator_shape_size+'px; bottom: -'+(half_shape+half_border)+'px;';

					if(seperator_background_color != '')
						shape_css += 'background-color:'+seperator_background_color+';';

					if(seperator_border != 'none' && seperator_class != 'ult-rounded-split-seperator-wrapper' && is_svg == false)
					{
						seperator_border_line_css = seperator_border_width+'px '+seperator_border+' '+seperator_border_color;
						shape_css += 'border-bottom:'+seperator_border_line_css+'; border-right:'+seperator_border_line_css+';';
						seperator_css += 'border-bottom:'+seperator_border_line_css+';';
						seperator_css_main = 'bottom:'+seperator_border_width+'px !important';
					}

					if(seperator_class != 'ult-no-shape-seperator' && seperator_class != 'ult-rounded-split-seperator-wrapper' && is_svg == false)
					{
						var css = '<style>.'+uniqclass+' .ult-main-seperator-inner:after { '+shape_css+' }</style>';
						jQuery('head').append(css);
					}

					if(is_svg == true)
					{
						inner_html = svg;
					}

					if(seperator_position == 'top_bottom_seperator')
					{
						var seperator_html = '<div class="ult-vc-seperator top_seperator '+seperator_class+' '+uniqclass+'" data-full-width="'+seperator_full_width+'" data-border="'+seperator_border+'" data-border-width="'+seperator_border_width+'"><div class="ult-main-seperator-inner">'+inner_html+'</div>'+icon+'</div>';
						seperator_html += '<div class="ult-vc-seperator bottom_seperator '+seperator_class+' '+uniqclass+'" data-full-width="'+seperator_full_width+'" data-border="'+seperator_border+'" data-border-width="'+seperator_border_width+'"><div class="ult-main-seperator-inner">'+inner_html+'</div>'+icon+'</div>';
					}
					else
					{
						var seperator_html = '<div class="ult-vc-seperator '+seperator_position+' '+seperator_class+' '+uniqclass+'" data-full-width="'+seperator_full_width+'" data-border="'+seperator_border+'" data-border-width="'+seperator_border_width+'"><div class="ult-main-seperator-inner">'+inner_html+'</div>'+icon+'</div>';
					}
					parent.prepend(seperator_html);

					seperator_css = '<style>.'+uniqclass+' .ult-main-seperator-inner { '+seperator_css+' }</style>';
					if(seperator_css_main != '')
					{
						seperator_css_main = '<style>.'+uniqclass+' .ult-main-seperator-inner { '+seperator_css_main+' }</style>';
						seperator_css += seperator_css_main;
					}
					if(icon != '')
					{
						var t = seperator_svg_height/2;
						if(seperator_type == 'none_seperator' || seperator_type == 'circle_svg_seperator' || seperator_type == 'triangle_svg_seperator')
							seperator_css += '<style>.'+uniqclass+' .separator-icon { -webkit-transform: translate(-50%, -50%); -moz-transform: translate(-50%, -50%); -ms-transform: translate(-50%, -50%); -o-transform: translate(-50%, -50%); transform: translate(-50%, -50%); }</style>';
						else
						{
							seperator_css += '<style>.'+uniqclass+'.top_seperator .separator-icon { -webkit-transform: translate(-50%, calc(-50% + '+(t)+'px)); -moz-transform: translate(-50%, calc(-50% + '+(t)+'px)); -ms-transform: translate(-50%, calc(-50% + '+(t)+'px)); -o-transform: translate(-50%, calc(-50% + '+(t)+'px)); transform: translate(-50%, calc(-50% + '+(t)+'px)); } .'+uniqclass+'.bottom_seperator .separator-icon { -webkit-transform: translate(-50%, calc(-50% - '+(t)+'px)); -moz-transform: translate(-50%, calc(-50% - '+(t)+'px)); -ms-transform: translate(-50%, calc(-50% - '+(t)+'px)); -o-transform: translate(-50%, calc(-50% - '+(t)+'px)); transform: translate(-50%, calc(-50% - '+(t)+'px)); }</style>';
						}
					}
					if(is_svg == true)
					{
						jQuery('.'+uniqclass).find('svg').css('height',seperator_svg_height);
						setTimeout(function(){
							if(seperator_type == 'multi_triangle_seperator') {
								jQuery('.ult-multi-trianle').each(function(i,mt){
									var svg_height = $(mt).find('svg').height();
									if($(mt).hasClass('top_seperator')) {
										//$(mt).css('top',-(svg_height-1));
									}
									else if($(mt).hasClass('bottom_seperator')) {
										$(mt).css('bottom',(svg_height-1));
									}
								});
							}
						},300);
					}
					jQuery('head').append(seperator_css);
				}
				/* end of seperators */
			}

		 jQuery.fn.isVdoOnScreen = function(){
			var win =jQuery(window);

			var viewport = {
				top : win.scrollTop(),
				left : win.scrollLeft()
			};
			viewport.right = viewport.left + win.width();
			viewport.bottom = viewport.top + win.height()-200;

			var bounds = this.parent().offset();
			bounds.right = bounds.left + this.parent().outerWidth();
			bounds.bottom = bounds.top + this.parent().outerHeight()-300;

			return (!(viewport.right < bounds.left || viewport.left > bounds.right || viewport.bottom < bounds.top || viewport.top > bounds.bottom));
		};

		jQuery.fn.ultimate_video_bg = function(option) {
			jQuery(this).each(function(){
				var selector =jQuery(this);
				var vdo = selector.data('ultimate-video');
				var vdo2 = selector.data('ultimate-video2');
				var muted =selector.data('ultimate-video-muted');
				var loop =selector.data('ultimate-video-loop');
				var autoplay =selector.data('ultimate-video-autoplay');
				var poster =selector.data('ultimate-video-poster');
				var ride = selector.data('bg-override');
				var start = selector.data('start-time');
				var stop = selector.data('stop-time');
				var anim_style= selector.data('upb-bg-animation');
				var overlay = selector.data('overlay');
				var overlay_color = selector.data('overlay-color');
				var overlay_pattern = selector.data('overlay-pattern');
				var overlay_pattern_opacity = selector.data('overlay-pattern-opacity');
				var overlay_pattern_size = selector.data('overlay-pattern-size');
				var overlay_pattern_attachment = selector.data('overlay-pattern-attachment');
				var viewport_vdo = selector.data('viewport-video');
				var controls = selector.data('controls');
				var controls_color = selector.data('controls-color');
				var fadeout = selector.data('fadeout');
				var fadeout_percentage = selector.data('fadeout-percentage');
				var parallax_content = selector.data('parallax-content');
				var parallax_content_sense = selector.data('parallax-content-sense');
				var disble_mobile = selector.data('row-effect-mobile-disable');
				var hide_row = selector.data('hide-row');
				var rtl = selector.data('rtl');
				var video_fixer = selector.data('video_fixer');
				var multi_color_overlay = '';
				var multi_color_overlay_opacity = '';
				var vc_row_class = selector.data('custom-vc-row');
				var vc = selector.data('vc');
				var theme_support = selector.data('theme-support');

				if(typeof vc_row_class === 'undefined' || vc_row_class === '')
					vc_row_class = 'wpb_row';

				if(typeof vc === 'undefined')
					vc = 0;

				if(typeof theme_support === 'undefined')
					theme_support = 'disable';

				if(selector.data('multi-color-overlay'))
				{
					multi_color_overlay = selector.data('multi-color-overlay');
					multi_color_overlay_opacity = selector.data('multi-color-overlay-opacity');
				}

				var overlay_html = overlay_color_html = overlay_pattern_html = overlay_multi_color_html = overlay_pattern_attachment_css = '';

				if(typeof overlay != 'undefined' && overlay.toString() === 'true'){
					if(overlay_pattern != '')
					{
						if(overlay_pattern_size != '')
							overlay_pattern_size = 'background-size:'+overlay_pattern_size+'px;';
						if(typeof overlay_pattern_attachment != 'undefined' && overlay_pattern_attachment != '')
							overlay_pattern_attachment_css = 'background-attachment:'+overlay_pattern_attachment+';';
						overlay_pattern_html = '<div class="upb_bg_overlay_pattern" style="background-image:url('+overlay_pattern+'); opacity:'+overlay_pattern_opacity+'; '+overlay_pattern_size+'; '+overlay_pattern_attachment_css+'"></div>';
					}
					if(overlay_color != '')
						overlay_color_html = '<div class="upb_bg_overlay" style="background-color:'+overlay_color+';"></div>';

					if(multi_color_overlay != '')
						overlay_multi_color_html = '<div class="upb_bg_overlay '+multi_color_overlay+'" style="opacity:'+multi_color_overlay_opacity+';"></div>';

					overlay_html = overlay_color_html+overlay_pattern_html+overlay_multi_color_html;
				}

				if(stop!=0){
					stop = stop;
				}else{
					stop ='';
				}

				vc = parseFloat(vc);
				if(vc < 4.4 || theme_support == 'enable')
				{
					if(selector.prev().is('p') || selector.prev().is('style'))
						var parent = selector.prev().prev();
					else
						var parent = selector.prev();
				}
				else
				{
					var parent = selector.prevAll('.'+vc_row_class+':first');
				}
				parent.css('position','relative');

				var current_row_classes = parent.attr('class'); // for browser full dimension and 4.9 compatible

				var temp_selector = selector;

				selector = parent;

				var resizee = function(){
					var w,h,ancenstor,al='',bl='';
					ancenstor = selector;
					resize_selector = ancenstor.find('.upb_video-bg');
					if(ride=='full'){
						ancenstor= jQuery('body');
					}
					if(ride=='ex-full'){
						ancenstor= jQuery('html');
					}
					if( ! isNaN(ride)){
						for(var i=0;i<ride;i++){
							if(ancenstor.prop("tagName")!='HTML'){
								ancenstor = ancenstor.parent();
							}else{
								break;
							}
						}
					}
					h = resize_selector.parents('upb_video_class').outerHeight();
					w = ancenstor.outerWidth();
					if(ride=='browser_size'){
						h = jQuery(window).height();
						w = jQuery(window).width();
						ancenstor.css('min-height',h+'px');
					}
					resize_selector.css({'min-height':h+'px','min-width':w+'px'});
					if(ancenstor.offset()){
						al = ancenstor.offset().left;
						if(resize_selector.offset()){
							bl = resize_selector.offset().left;
						}
					}

					var width =w,
					pWidth, // player width, to be defined
					//height = resize_selector.height(),
					height = h,
					pHeight, // player height, tbd
					vimeovideoplayer = resize_selector.find('.upb_vimeo_iframe');
					youvideoplayer = resize_selector.find('.upb_utube_iframe');
					embeddedvideoplayer = resize_selector.find('.upb_video-src');
					var ratio =(16/9);
					if(vimeovideoplayer){
						if (width / ratio < height) { // if new video height < window height (gap underneath)
							pWidth = Math.ceil(height * ratio); // get new player width
							vimeovideoplayer.width(pWidth).height(height).css({left: (width - pWidth) / 2, top: 0}); // player width is greater, offset left; reset top
						} else { // new video width < window width (gap to right)
							pHeight = Math.ceil(width / ratio); // get new player height
							vimeovideoplayer.width(width).height(pHeight).css({left: 0, top: (height - pHeight) / 2}); // player height is greater, offset top; reset left
						}
					}
					if(embeddedvideoplayer){
						var adapt_height = resize_selector.height();
						if (width / (16/9) < adapt_height) {
						//if(w < adapt_height) {
							embeddedvideoplayer.css('width','auto');
							embeddedvideoplayer.css('height','100%');
							//pWidth = Math.ceil(height * (16/9));
							//embeddedvideoplayer.width(pWidth).height(height).css({left: (width - pWidth) / 2, top: 0});

						} else {
							embeddedvideoplayer.css('width','100%');
							embeddedvideoplayer.css('height','auto');
							//pHeight = Math.ceil(width / (16/9));
							//youvideoplayer.width(width).height(pHeight).css({left: 0, top: (height - pHeight) / 2});
							//embeddedvideoplayer.width(width).height(pHeight).css({left: 0, top: 0});
						}
					}
				}
				resizee();

				// hide row
				if(hide_row != '')
				{
					selector.addClass('ult-vc-hide-row');
					selector.attr('data-hide-row', hide_row);
				}

				// rtl
				selector.attr('data-rtl', rtl);

				selector.addClass('upb_video_class');
				selector.attr('data-row-effect-mobile-disable',disble_mobile);
				if(fadeout == 'fadeout_row_value')
				{
					selector.addClass('vc-row-fade');
					selector.attr('data-fadeout-percentage',fadeout_percentage);
				}

				selector.attr('data-upb_br_animation',anim_style);
				if(vdo){
					if(vdo.indexOf('youtube.com')!=-1){
						option='youtube';
					}
					else if (vdo.indexOf('vimeo.com')!=-1){
						option='vimeo'
					}
				}

				var control_html = '';
				if(controls == 'display_control'){
					if(/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent))
					{
						var control_class = 'ult-vid-cntrlplay';
						var control_action = 'pause';
					}
					else
					{
						var control_class = 'ult-vid-cntrlpause';
						var control_action = 'play';
					}

					control_html = '<span class="video-controls" data-action="'+control_action+'" style="color:'+controls_color+'"><i class="'+control_class+'"></i></span>';
				}

				if(ride == "browser_size")
				{
					selector.wrapInner('<div class="upb_video-text-wrapper"><div class="upb_video-text"></div></div>');
					selector.find('.upb_video-text-wrapper').find('.upb_video-text').addClass(current_row_classes);
					//selector.find('.upb_video-text').html(vd_html);
				}

				if(parallax_content == 'parallax_content_value')
				{
					selector.addClass('vc-row-translate');
					selector.attr('data-parallax-content-sense', parallax_content_sense);
					selector.wrapInner('<div class="vc-row-translate-wrapper '+current_row_classes+'"></div>');
					var ptop = selector.css('padding-top');
					var pbottom = selector.css('padding-bottom');
					selector.find('.vc-row-translate-wrapper').css({'padding-top':ptop, 'padding-bottom':pbottom});
					selector[0].style.setProperty( 'padding-top', '0px', 'important' );
					selector[0].style.setProperty( 'padding-bottom', '0px', 'important' );
				}

				var fixer_class = '';
				if(video_fixer.toString() == 'true')
					fixer_class = 'uvc-video-fixer';

				if(option=='youtube' || option=='vimeo')
				{
					selector.prepend('<div class="upb_video-wrapper '+fixer_class+'"><div class="upb_video-bg utube" data-rtl="'+rtl+'" data-bg-override="'+ride+'" data-row="'+vc_row_class+'" data-theme-support="'+theme_support+'">'+overlay_html+'</div></div>');
				}
				else
				{
					selector.prepend(' <div class="upb_video-wrapper"><div class="upb_video-bg" data-bg-override="'+ride+'" data-rtl="'+rtl+'" data-row="'+vc_row_class+'" data-theme-support="'+theme_support+'"><video class="upb_video-src"></video>'+control_html+overlay_html+'</div></div>');
				}

				/* seprators here */
				ult_vc_seperators(temp_selector, selector);
				temp_selector.remove();

				if(option=='youtube'){
					vdo = vdo.substring((vdo.indexOf('watch?v='))+8,(vdo.indexOf('watch?v='))+19);
					var content = selector.find('.upb_video-bg');
					if(loop=='loop') loop=true;
					if(muted=='muted') muted=true;
					content.attr('data-vdo',vdo);content.attr('data-loop',loop);content.attr('data-poster',poster);
					content.attr('data-muted',muted);content.attr('data-start',start);content.attr('data-stop',stop);
					if(viewport_vdo === true)
					{
						content.addClass('enable-on-viewport');
						content.addClass('youtube-video');
						vc_viewport_video();
					}
				}else if(option=='vimeo'){
					vdo = vdo.substring((vdo.indexOf('vimeo.com/'))+10,(vdo.indexOf('vimeo.com/'))+18);
					var content = selector.find('.upb_video-bg');
					content.html('<iframe class="upb_vimeo_iframe" src="http://player.vimeo.com/video/'+vdo+'?portrait=0&amp;byline=0&amp;title=0&amp;badge=0&amp;loop=0&amp;autoplay=1&amp;api=1&amp;rel=0&amp;" height="1600" width="900" frameborder=""></iframe>')
				}
				else{
					var content = selector.find('.upb_video-src');

					if(! /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent) || controls == 'display_control')
					{
						jQuery('<source/>', {
							type: 'video/mp4',
							src: vdo
						}).appendTo(content);
						if(typeof vdo2 !== 'undefined' && vdo2 !== '')
						{
							var vdo2_type = '';
							if(vdo2.match(/.ogg/i))
								vdo2_type = 'video/ogg';
							else if(vdo2.match(/.webm/i))
								vdo2_type = 'video/webm';
							if(vdo2_type != '')
							{
								jQuery('<source/>', {
									type: vdo2_type,
									src: vdo2
								}).appendTo(content);
							}
						}

						if(muted=='muted') {
							content.attr({'data-mute':'muted'});
						}

						if(loop=='loop'){ content.attr({'loop':loop}); }
						//if(poster){ content.attr({'poster':poster}); }
						content.attr({'preload':'auto'});
						if(viewport_vdo === true)
						{
							content.addClass('enable-on-viewport');
							content.addClass('hosted-video');
							vc_viewport_video();
						}
						else
						{
							if(autoplay=='autoplay'){ content.attr({'autoplay':autoplay}); }
						}
					}
					else
					{
						if(controls != 'display_control')
						{
							if(poster != '')
							{
								content.parent().css({'background-image':'url('+poster+')'});
								content.parent().find('.video-controls').hide();
							}
							content.remove();
						}
					}
				}

				jQuery(window).load(function(){
					resizee();
				});
				jQuery(window).resize(function(){
					resizee();
				});
				//window.onload = function () {
					jQuery('.upb_video-src').each(function(i,vd){
						var is_muted = jQuery(vd).attr('data-mute');
						if(typeof is_muted === 'undefined')
							is_muted = false;
						if(is_muted === 'muted') {
							var element = jQuery(vd)[0];
							element.muted = "muted";
						}
					});
				//}
			})
			return this;
		}

		jQuery.fn.ultimate_bg_shift = function() {
			jQuery(this).each(function(){
				var selector =jQuery(this);
				var bg = selector.data('ultimate-bg');   // dep in vc v4.1
				var style = selector.data('ultimate-bg-style');
				var bg_color = selector.prev().css('background-color');
				var rep = selector.data('bg-img-repeat');
				var size = selector.data('bg-img-size');
				var pos = selector.data('bg-img-position');
				var sense = selector.data('parallx_sense');
				var ride = selector.data('bg-override');
				var attach = selector.data('bg_img_attach');
				var anim_style= selector.data('upb-bg-animation');
				var al,bl,overlay_color='';
				var overlay= selector.data('overlay');
				var overlay_color = selector.data('overlay-color');
				var overlay_pattern = selector.data('overlay-pattern');
				var overlay_pattern_opacity = selector.data('overlay-pattern-opacity');
				var overlay_pattern_size = selector.data('overlay-pattern-size');
				var overlay_pattern_attachment = selector.data('overlay-pattern-attachment');
				var fadeout = selector.data('fadeout');
				var fadeout_percentage = selector.data('fadeout-percentage');
				var parallax_content = selector.data('parallax-content');
				var parallax_content_sense = selector.data('parallax-content-sense');
				var animation = selector.data('bg-animation');
				var animation_type = selector.data('bg-animation-type');
				var animation_repeat = selector.data('animation-repeat');
				var disble_mobile = selector.data('row-effect-mobile-disable');
				var disble_mobile_img_parallax = selector.data('img-parallax-mobile-disable');
				var hide_row = selector.data('hide-row');
				var rtl = selector.data('rtl');
				var multi_color_overlay = '';
				var multi_color_overlay_opacity = '';
				var vc_row_class = selector.data('custom-vc-row');
				var vc = selector.data('vc');
				var theme_support = selector.data('theme-support');

				if(typeof vc_row_class === 'undefined' || vc_row_class === '')
					vc_row_class = 'wpb_row';

				if(typeof vc === 'undefined')
					vc = 0;

				if(typeof theme_support === 'undefined')
					theme_support = 'disable';

				if(selector.data('multi-color-overlay'))
				{
					multi_color_overlay = selector.data('multi-color-overlay');
					multi_color_overlay_opacity = selector.data('multi-color-overlay-opacity');
				}

				var overlay_html = overlay_color_html = overlay_pattern_html = overlay_multi_color_html = overlay_pattern_attachment_css = '';

				if(typeof overlay != 'undefined' && overlay.toString() === 'true'){
					if(overlay_pattern != '')
					{
						if(overlay_pattern_size != '')
							overlay_pattern_size = 'background-size:'+overlay_pattern_size+'px;';
						if(typeof overlay_pattern_attachment != 'undefined' && overlay_pattern_attachment != '')
							overlay_pattern_attachment_css = 'background-attachment:'+overlay_pattern_attachment+';';
						overlay_pattern_html = '<div class="upb_bg_overlay_pattern" style="background-image:url('+overlay_pattern+'); opacity:'+overlay_pattern_opacity+'; '+overlay_pattern_size+'; '+overlay_pattern_attachment_css+'"></div>';
					}
					if(overlay_color != '')
						overlay_color_html = '<div class="upb_bg_overlay" style="background-color:'+overlay_color+';"></div>';
					if(multi_color_overlay != '')
						overlay_multi_color_html = '<div class="upb_bg_overlay '+multi_color_overlay+'" style="opacity:'+multi_color_overlay_opacity+';"></div>';
					overlay_html = overlay_color_html+overlay_pattern_html+overlay_multi_color_html;
				}

				vc = parseFloat(vc);
				if(vc < 4.4 || theme_support == 'enable')
				{
					if(selector.prev().is('p') || selector.prev().is('style'))
						var parent = selector.prev().prev();
					else
						var parent = selector.prev();
				}
				else
				{
					var parent = selector.prevAll('.'+vc_row_class+':first');
				}
				parent.css('position','relative');

				var current_row_classes = parent.attr('class'); // for browser full dimension and 4.9 compatible

				if(ride == "browser_size")
				{
					parent.wrapInner('<div class="upb-background-text-wrapper"><div class="upb-background-text"></div></div>');
					selector.parent().find('.upb-background-text-wrapper').addClass('full-browser-size');
					selector.parent().find('.upb-background-text-wrapper').find('.upb-background-text').addClass(current_row_classes);
				}

				if(parallax_content == 'parallax_content_value')
				{
					parent.addClass('vc-row-translate');
					parent.attr('data-parallax-content-sense', parallax_content_sense);
					parent.wrapInner('<div class="vc-row-translate-wrapper '+current_row_classes+'"></div>');
					var ptop = parent.css('padding-top');
					var pbottom = parent.css('padding-bottom');
					parent.find('.vc-row-translate-wrapper').css({'padding-top':ptop, 'padding-bottom':pbottom});
					parent[0].style.setProperty( 'padding-top', '0px', 'important' );
					parent[0].style.setProperty( 'padding-bottom', '0px', 'important' );
				}

				// hide row
				if(hide_row != '')
				{
					parent.addClass('ult-vc-hide-row');
					parent.attr('data-hide-row', hide_row);
				}

				// rtl
				parent.attr('data-rtl', rtl);

				parent.prepend('<div class="upb_row_bg">'+overlay_html+'</div>');

				selector.remove();

				/* seprators here */
				ult_vc_seperators(selector, parent);

				selector = parent;

				selector.attr('data-row-effect-mobile-disable',disble_mobile);
				selector.attr('data-img-parallax-mobile-disable',disble_mobile_img_parallax);
				if(fadeout == 'fadeout_row_value')
				{
					selector.addClass('vc-row-fade');
					selector.attr('data-fadeout-percentage',fadeout_percentage);
				}

				selector.css('background-image','');
				selector = selector.find('.upb_row_bg');

				selector.attr('data-upb_br_animation',anim_style);
				if(size!='automatic'){
					selector.css({'background-size':size});
				}
				else{
					selector.addClass('upb_bg_size_automatic');
				}
				selector.css({'background-repeat':rep,'background-position':pos,'background-color':bg_color});
				if(style=='vcpb-fs-jquery' || style=='vcpb-mlvp-jquery'){
					selector.attr('data-img-array',bg);
				}
				else{
					selector.css({'background-image':bg,'background-attachment':attach});
				}
				selector.attr('data-parallax_sense',sense);
				selector.attr('data-bg-override',ride);
				selector.attr('data-bg-animation',animation);
				selector.attr('data-bg-animation-type',animation_type);
				selector.attr('data-animation-repeat',animation_repeat);

				selector.addClass(style);
				var resize = function(){
					var w,h,ancenstor,al,bl;
					ancenstor = selector.parent();
					if(ride=='full'){
						ancenstor= jQuery('body');
						al=0;
					}
					if(ride=='ex-full'){
						ancenstor= jQuery('html');
						al=0;
					}
					if( ! isNaN(ride)){
						for(var i=0;i<ride;i++){
							if(ancenstor.prop("tagName")!='HTML'){
								ancenstor = ancenstor.parent();
							}else{
								break;
							}
						}
						al = ancenstor.offset().left;
					}
					wh = jQuery(window).height();
					h = selector.parent().outerHeight();
					w = ancenstor.outerWidth();
					selector.css({'min-width':w+'px'});
					bl = selector.offset().left;
					selector.css({'left':-(Math.abs(al-bl))+'px'});
					if(ride=='browser_size'){
						var fbh = selector.parent().find('.upb-background-text').height();
						if(fbh > wh)
							wh = fbh;
						selector.parent().css('height',wh+'px');
						//selector.css('min-height',wh+'px');
						selector.parent().find('.upb-background-text-wrapper').css('height',wh+'px');
					}
				}
				resize();
				jQuery(window).load(function(){
					resize();
				});
				jQuery(window).resize(function(){
					resize();
				});
			})
			return this;
		}
		jQuery.fn.ultimate_grad_shift = function() {
			jQuery(this).each(function(){
				var selector =jQuery(this);
				var grad = selector.data('grad');
				var grad_type = selector.data('grad-type');
				var grad_custom_degree = selector.data('grad-custom-degree');

				var ride = jQuery(this).data('bg-override');
				var overlay = selector.data('overlay');
				var overlay_color = selector.data('overlay-color');
				var overlay_pattern = selector.data('overlay-pattern');
				var overlay_pattern_opacity = selector.data('overlay-pattern-opacity');
				var overlay_pattern_size = selector.data('overlay-pattern-size');
				var overlay_pattern_attachment = selector.data('overlay-pattern-attachment');
				var anim_style= selector.data('upb-bg-animation');
				var fadeout = selector.data('fadeout');
				var fadeout_percentage = selector.data('fadeout-percentage');
				var parallax_content = selector.data('parallax-content');
				var parallax_content_sense = selector.data('parallax-content-sense');
				var disble_mobile = selector.data('row-effect-mobile-disable');
				var hide_row = selector.data('hide-row');
				var rtl = selector.data('rtl');
				var multi_color_overlay = '';
				var multi_color_overlay_opacity = '';
				var vc_row_class = selector.data('custom-vc-row');
				var vc = selector.data('vc');
				var theme_support = selector.data('theme-support');

				if(typeof vc_row_class === 'undefined' || vc_row_class === '')
					vc_row_class = 'wpb_row';

				if(typeof vc === 'undefined')
					vc = 0;

				if(typeof theme_support === 'undefined')
					theme_support = 'disable';

				if(selector.data('multi-color-overlay'))
				{
					multi_color_overlay = selector.data('multi-color-overlay');
					multi_color_overlay_opacity = selector.data('multi-color-overlay-opacity');
				}

				vc = parseFloat(vc);
				if(vc < 4.4 || theme_support == 'enable')
				{
					if(selector.prev().is('p') || selector.prev().is('style'))
						var parent = selector.prev().prev();
					else
						var parent = selector.prev();
				}
				else
				{
					var parent = selector.prevAll('.'+vc_row_class+':first');
				}
				parent.css('position','relative');

				var current_row_classes = parent.attr('class'); // for browser full dimension and 4.9 compatible

				selector.remove();

				var overlay_html = overlay_color_html = overlay_pattern_html = overlay_multi_color_html = overlay_pattern_attachment_css = '';

				if(typeof overlay != 'undefined' && overlay.toString() === 'true'){
					if(overlay_pattern != '')
					{
						if(overlay_pattern_size != '')
							overlay_pattern_size = 'background-size:'+overlay_pattern_size+'px;';
						if(typeof overlay_pattern_attachment != 'undefined' && overlay_pattern_attachment != '')
							overlay_pattern_attachment_css = 'background-attachment:'+overlay_pattern_attachment+';';
						overlay_pattern_html = '<div class="upb_bg_overlay_pattern" style="background-image:url('+overlay_pattern+'); opacity:'+overlay_pattern_opacity+'; '+overlay_pattern_size+'; '+overlay_pattern_attachment_css+'"></div>';
					}
					if(overlay_color != '')
						overlay_color_html = '<div class="upb_bg_overlay" style="background-color:'+overlay_color+';"></div>';

					if(multi_color_overlay != '')
						overlay_multi_color_html = '<div class="upb_bg_overlay '+multi_color_overlay+'" style="opacity:'+multi_color_overlay_opacity+';"></div>';

					overlay_html = overlay_color_html+overlay_pattern_html+overlay_multi_color_html;
				}

				if(ride == "browser_size")
				{
					parent.wrapInner('<div class="upb-background-text-wrapper"><div class="upb-background-text"></div></div>');
					parent.find('.upb-background-text-wrapper').find('.upb-background-text').addClass(current_row_classes);
					parent.addClass('full-browser-size');
				}

				if(parallax_content == 'parallax_content_value')
				{
					parent.addClass('vc-row-translate');
					parent.attr('data-parallax-content-sense', parallax_content_sense);
					parent.wrapInner('<div class="vc-row-translate-wrapper '+current_row_classes+'"></div>');
					var ptop = parent.css('padding-top');
					var pbottom = parent.css('padding-bottom');
					parent.find('.vc-row-translate-wrapper').css({'padding-top':ptop, 'padding-bottom':pbottom});
					parent[0].style.setProperty( 'padding-top', '0px', 'important' );
					parent[0].style.setProperty( 'padding-bottom', '0px', 'important' );
				}

				// hide row
				if(hide_row != '')
				{
					parent.addClass('ult-vc-hide-row');
					parent.attr('data-hide-row', hide_row);
				}

				//rtl
				parent.attr('data-rtl', rtl);

				parent.prepend('<div class="upb_row_bg">'+overlay_html+'</div>');
				//selector.remove();

				/* seprators here */
				ult_vc_seperators(selector, parent);

				selector = parent;

				selector.attr('data-row-effect-mobile-disable',disble_mobile);
				if(fadeout == 'fadeout_row_value')
				{
					selector.addClass('vc-row-fade');
					selector.attr('data-fadeout-percentage',fadeout_percentage);
				}

				selector.css('background-image','');
				selector = selector.find('.upb_row_bg');
				selector.attr('data-upb_br_animation',anim_style);
				grad = grad.replace('url(data:image/svg+xml;base64,','');
				var e_pos = grad.indexOf(';');
				grad = grad.substring(e_pos+1);
				selector.attr('style',grad);

				selector.attr('data-bg-override',ride);
				if(ride == 'browser_size')
					selector.parent().find('.upb-background-text-wrapper').addClass('full-browser-size');

				var resize = function(){
					var w,h,ancenstor,al,bl;
					ancenstor = selector.parent();
					if(ride=='full'){
						ancenstor= jQuery('body');
						al=0;
					}
					if(ride=='ex-full'){
						ancenstor= jQuery('html');
						al=0;
					}
					if( ! isNaN(ride)){
						for(var i=0;i<ride;i++){
							if(ancenstor.prop("tagName")!='HTML'){
								ancenstor = ancenstor.parent();
							}else{
								break;
							}
						}
						al = ancenstor.offset().left;
					}
					wh = jQuery(window).height();
					h = selector.parent().outerHeight();
					w = ancenstor.outerWidth();
					selector.css({'min-width':w+'px'});
					bl = selector.offset().left;
					selector.css({'left':-(Math.abs(al-bl))+'px'});
					if(ride=='browser_size'){
						var fbh = selector.parent().find('.upb-background-text').height();
						if(fbh > wh)
							wh = fbh;
						selector.parent().css('height',wh+'px');
						selector.parent().find('.upb-background-text-wrapper').css('height',wh+'px');
					}
				}
				resize();
				jQuery(window).load(function(){
					resize();
				});
				jQuery(window).resize(function(){
					resize();
				});
			})
			return this;
		}
		jQuery.fn.ultimate_bg_color_shift = function() {
			jQuery(this).each(function(){
				var selector = jQuery(this);
				var ride = jQuery(this).data('bg-override');
				var bg_color = jQuery(this).data('bg-color');
				var fadeout = selector.data('fadeout');
				var fadeout_percentage = selector.data('fadeout-percentage');
				var parallax_content = selector.data('parallax-content');
				var parallax_content_sense = selector.data('parallax-content-sense');
				var disble_mobile = selector.data('row-effect-mobile-disable');
				var overlay = selector.data('overlay');
				var overlay_color = selector.data('overlay-color');
				var overlay_pattern = selector.data('overlay-pattern');
				var overlay_pattern_opacity = selector.data('overlay-pattern-opacity');
				var overlay_pattern_size = selector.data('overlay-pattern-size');
				var overlay_pattern_attachment = selector.data('overlay-pattern-attachment');
				var hide_row = selector.data('hide-row');
				var rtl = selector.data('rtl');
				var multi_color_overlay = '';
				var multi_color_overlay_opacity = '';
				var vc = selector.data('vc');
				var theme_support = selector.data('theme-support');
				var vc_row_class = selector.data('custom-vc-row');

				if(typeof vc_row_class === 'undefined' || vc_row_class === '')
					vc_row_class = 'wpb_row';

				if(typeof vc === 'undefined')
					vc = 0;

				if(typeof theme_support === 'undefined')
					theme_support = 'disable';

				if(selector.data('multi-color-overlay'))
				{
					multi_color_overlay = selector.data('multi-color-overlay');
					multi_color_overlay_opacity = selector.data('multi-color-overlay-opacity');
				}

				vc = parseFloat(vc);
				if(vc < 4.4 || theme_support == 'enable')
				{
					if(selector.prev().is('p') || selector.prev().is('style'))
						var parent = selector.prev().prev();
					else
						var parent = selector.prev();
				}
				else
				{
					var parent = selector.prevAll('.'+vc_row_class+':first');
				}
				parent.css('position','relative');

				var current_row_classes = parent.attr('class'); // for browser full dimension and 4.9 compatible

				var overlay_html = overlay_color_html = overlay_pattern_html = overlay_multi_color_html = overlay_pattern_attachment_css = '';

				if(typeof overlay != 'undefined' && overlay.toString() === 'true'){
					if(overlay_pattern != '')
					{
						if(overlay_pattern_size != '')
							overlay_pattern_size = 'background-size:'+overlay_pattern_size+'px;';
						if(typeof overlay_pattern_attachment != 'undefined' && overlay_pattern_attachment != '')
							overlay_pattern_attachment_css = 'background-attachment:'+overlay_pattern_attachment+';';
						overlay_pattern_html = '<div class="upb_bg_overlay_pattern" style="background-image:url('+overlay_pattern+'); opacity:'+overlay_pattern_opacity+'; '+overlay_pattern_size+'; '+overlay_pattern_attachment_css+'"></div>';
					}
					if(overlay_color != '')
						overlay_color_html = '<div class="upb_bg_overlay" style="background-color:'+overlay_color+';"></div>';

					if(multi_color_overlay != '')
						overlay_multi_color_html = '<div class="upb_bg_overlay '+multi_color_overlay+'" style="opacity:'+multi_color_overlay_opacity+';"></div>';

					overlay_html = overlay_color_html+overlay_pattern_html+overlay_multi_color_html;
				}

				if(ride == "browser_size")
				{
					parent.wrapInner('<div class="upb-background-text-wrapper"><div class="upb-background-text"></div></div>');
					parent.find('.upb-background-text-wrapper').find('.upb-background-text').addClass(current_row_classes);
				}
				else
					var brw_text_wrapper = '';

				// hide row
				if(hide_row != '')
				{
					parent.addClass('ult-vc-hide-row');
					parent.attr('data-hide-row', hide_row);
				}

				// rtl
				parent.attr('data-rtl', rtl);

				if(parallax_content == 'parallax_content_value')
				{
					parent.addClass('vc-row-translate');
					parent.wrapInner('<div class="vc-row-translate-wrapper '+current_row_classes+'"></div>');
					parent.attr('data-parallax-content-sense', parallax_content_sense);
					var ptop = parent.css('padding-top');
					var pbottom = parent.css('padding-bottom');
					parent.find('.vc-row-translate-wrapper').css({'padding-top':ptop, 'padding-bottom':pbottom});
					parent[0].style.setProperty( 'padding-top', '0px', 'important' );
					parent[0].style.setProperty( 'padding-bottom', '0px', 'important' );
				}

				parent.prepend('<div class="upb_row_bg">'+overlay_html+'</div>');

				/* seprators here */
				ult_vc_seperators(selector, parent);

				selector.remove();
				selector = parent;

				selector.attr('data-row-effect-mobile-disable',disble_mobile);
				if(fadeout == 'fadeout_row_value')
				{
					selector.addClass('vc-row-fade');
					selector.attr('data-fadeout-percentage',fadeout_percentage);
				}

				selector.css('background-image','');
				selector = selector.find('.upb_row_bg');
				selector.css({'background':bg_color});
				selector.attr('data-bg-override',ride);
				if(ride == 'browser_size')
					selector.parent().find('.upb-background-text-wrapper').addClass('full-browser-size');

				var resize = function(){
					var w,h,ancenstor,al,bl;
					ancenstor = selector.parent();
					if(ride=='full'){
						ancenstor= jQuery('body');
						al=0;
					}
					if(ride=='ex-full'){
						ancenstor= jQuery('html');
						al=0;
					}
					if( ! isNaN(ride)){
						for(var i=0;i<ride;i++){
							if(ancenstor.prop("tagName")!='HTML'){
								ancenstor = ancenstor.parent();
							}else{
								break;
							}
						}
						al = ancenstor.offset().left;
					}
					wh = jQuery(window).height();
					h = selector.parent().outerHeight();
					w = ancenstor.outerWidth();
					selector.css({'min-width':w+'px'});
					bl = selector.offset().left;
					selector.css({'left':-(Math.abs(al-bl))+'px'});
					if(ride=='browser_size'){
						var fbh = selector.parent().find('.upb-background-text').height();
						if(fbh > wh)
							wh = fbh;
						selector.parent().css('height',wh+'px');
						selector.parent().find('.upb-background-text-wrapper').css('height',wh+'px');
					}
				}
				resize();
				jQuery(window).load(function(){
					resize();
				});
				jQuery(window).resize(function(){
					resize();
				});
			})
			return this;
		}
		jQuery.fn.ultimate_parallax_animation = function(applyTo) {
			var windowHeight = jQuery(window).height();
			var getHeight = function(obj) {
					return obj.height();
				};
			var $this = jQuery(this);
			var prev_pos = jQuery(window).scrollTop();
			function updata(){
				var firstTop;
				var paddingTop = 0;
				var pos = jQuery(window).scrollTop();
				$this.each(function(){
					if(jQuery(this).data('upb_br_animation')=='upb_fade_animation'){
						firstTop = jQuery(this).offset().top;
						var $element = jQuery(this);
						var top = $element.offset().top;
						var height = getHeight($element);
						if (top + height < pos || top > pos + windowHeight-100) {
							return;
						}
						var pos_change = prev_pos-pos;
						if ((top+height)-windowHeight < pos) {
							var op_c = (pos_change/windowHeight);
							if(applyTo=='parent'){
								var op = parseInt(jQuery(this).css('opacity'));
								op += op_c/2.3;
								jQuery(this).parents('.wpb_row').css({opacity :op})
							}
							if(applyTo=='self'){
								var op = parseInt(jQuery(this).css('opacity'));
								op += op_c/2.3;
								jQuery(this).css({opacity :op})
							}
						}
						prev_pos = pos;
					}
				});
			}
			jQuery(window).bind('scroll', updata).resize(updata);
			updata();
		}

		 var temp_vdo_pos = 0;

			if(jQuery('.upb_content_video, .upb_content_iframe').prev().is('p'))
				jQuery('.upb_content_video, .upb_content_iframe').prev().prev().css('background-image','').css('background-repeat','');
			else
				jQuery('.upb_content_video, .upb_content_iframe').prev().css('background-image','').css('background-repeat','');

			jQuery('.upb_content_video').ultimate_video_bg();
			jQuery('.upb_bg_img').ultimate_bg_shift();
			jQuery('.upb_content_iframe').ultimate_video_bg();
			jQuery('.upb_grad').ultimate_grad_shift();
			jQuery('.upb_color').ultimate_bg_color_shift();

			jQuery('.upb_no_bg').each(function(index, nobg) {

				var no_bg_fadeout = jQuery(nobg).attr('data-fadeout');
				var fadeout_percentage = jQuery(nobg).data('fadeout-percentage');
				var parallax_content = jQuery(nobg).data('parallax-content');
				var parallax_content_sense = jQuery(nobg).data('parallax-content-sense');

				var disble_mobile = jQuery(nobg).data('row-effect-mobile-disable');

				var vc_row_class = jQuery(nobg).data('custom-vc-row');
				var vc = jQuery(nobg).data('vc');
				var theme_support = jQuery(nobg).data('theme-support');

				if(typeof vc_row_class === 'undefined' || vc_row_class === '')
					vc_row_class = 'wpb_row';

				if(typeof vc === 'undefined')
					vc = 0;

				if(typeof theme_support === 'undefined')
					theme_support = 'disable';

				vc = parseFloat(vc);
				if(vc < 4.4 || theme_support == 'enable')
				{
					if(jQuery(nobg).prev().is('p') || jQuery(nobg).prev().is('style'))
						var parent = jQuery(nobg).prev().prev();
					else
						var parent = jQuery(nobg).prev();
				}
				else
				{
					var parent = jQuery(nobg).prevAll('.'+vc_row_class+':first');
				}
				parent.css('position','relative');

				if(typeof parent[0] === 'undefined')
					return false;

				parent.attr('row-effect-mobile-disable',disble_mobile);

				if(no_bg_fadeout == 'fadeout_row_value')
				{
					parent.addClass('vc-row-fade');
					parent.data('fadeout-percentage',fadeout_percentage);
				}
				if(parallax_content == 'parallax_content_value')
				{
					parent.addClass('vc-row-translate');
					parent.attr('data-parallax-content-sense', parallax_content_sense);

					parent.wrapInner('<div class="vc-row-translate-wrapper"></div>');
					var ptop = parent.css('padding-top');
					var pbottom = parent.css('padding-bottom');
					parent.find('.vc-row-translate-wrapper').css({'padding-top':ptop, 'padding-bottom':pbottom});
					parent[0].style.setProperty( 'padding-top', '0px', 'important' );
					parent[0].style.setProperty( 'padding-bottom', '0px', 'important' );
				}
			});
			jQuery('.upb_no_bg').remove();

			var resizees = function(){
				jQuery('.upb_row_bg').each(function() {
					var ride = jQuery(this).data('bg-override');
					var theme_support = jQuery(this).data('theme-support');
					var vc_row = jQuery(this).data('row');

					var ancenstor,parent;

					if(typeof theme_support !== 'undefined' && theme_support !== 'enable')
						parent = jQuery(this).parents('.'+vc_row+':first');
					else
						parent = jQuery(this).parent();

					parent.addClass('vc_row-has-fill');

					if(ride=='browser_size'){
						ancenstor=jQuery('html');
					}
					if(ride == 'ex-full'){
						ancenstor = jQuery('html');
					}
					else if(ride == 'full'){
						ancenstor = jQuery('body');
					}

					else if(! isNaN(ride)){
						ancenstor = parent;
						for ( var i = 0; i < ride; i++ ) {
							if ( ancenstor.is('html') ) {
								break;
							}
							ancenstor = ancenstor.parent();
						}
					}
					var al= parseInt( ancenstor.css('paddingLeft') );
					var ar= parseInt( ancenstor.css('paddingRight') )
					var w = al+ar + ancenstor.width();
					var bl = - ( parent.offset().left - ancenstor.offset().left );
					if ( bl > 0 ) {	left = 0; }
					jQuery(this).css({'width': w,'left': bl	})
					if(ride=='browser_size'){
						var a_width = ancenstor.width();
						var a_height = ancenstor.height();
						var p_width = parent.width();
						var p_height = parent.height();

						var rheight = parent.find('.upb-background-text').height();
						var w_height = jQuery(window).height();
						if(rheight > p_height)
							var m_height = rheight;
						else
							var m_height = w_height;

						parent.css('min-height',m_height+'px');
						parent.find('.upb-background-text-wrapper').css('min-height',m_height+'px');
					}
				});

				jQuery('.upb_video-bg').each(function(index,ele) {
					var ride = jQuery(this).data('bg-override');
					var rtl = jQuery(this).attr('data-rtl');
					var theme_support = jQuery(this).data('theme-support');
					var vc_row = jQuery(this).data('row');

					var ancenstor,parent;

					if(typeof theme_support !== 'undefined' && theme_support !== 'enable')
						parent = jQuery(this).parents('.'+vc_row+':first');
					else
						parent = jQuery(this).parent();
					if(ride=='browser_size'){
						ancenstor=jQuery('html');
						jQuery(this).parents('.upb_video_class').css('overflow','visible');

					}
					else if(ride == 'ex-full'){
						ancenstor = jQuery('html');
						jQuery(this).parents('.upb_video_class').css('overflow','visible');
					}
					else if(ride == 'full'){
						ancenstor = jQuery('body');
						jQuery(this).parents('.upb_video_class').css('overflow','visible');
					}
					else if(! isNaN(ride) && ride != 0){
						ancenstor = parent;
						for ( var i = 1; i <= ride; i++ ) {
							if ( ancenstor.is('html') ) {
								break;
							}
							ancenstor = ancenstor.parent();
						}
					}
					else
						ancenstor = parent;

					var al= parseInt( ancenstor.css('paddingLeft') );
					var ar= parseInt( ancenstor.css('paddingRight') );
					var vc_margin = parseInt( ancenstor.css('marginLeft') ); //vc row margin
					var w = ancenstor.outerWidth();
					var wx = w;
					var vdo_left = jQuery(this).offset().left;
					var vdo_left_pos = jQuery(this).position().left;
					var div_left = ancenstor.offset().left;
					var cal_left = div_left - vdo_left;
					if(vdo_left_pos < 0)
						cal_left = vdo_left_pos + cal_left;

					if(index == 0)
						temp_vdo_pos = vdo_left_pos;
					if(temp_vdo_pos > 0)
						cal_left = temp_vdo_pos;

					if(typeof rtl !== 'undefined' && (rtl === true || rtl === 'true'))
						jQuery(this).css({'width': w,'min-width':w,'right': cal_left });
					else
						jQuery(this).css({'width': w,'min-width':w,'left': cal_left });
					var ratio =(16/9);

					var w_width = jQuery(window).width();
					var w_height = jQuery(window).height();
					var v_height = parent.find('video').height();

					if(ride=='browser_size')
						var rheight = parent.find('.upb_video-text').height();
					else
						var rheight = parent.height();

					if(w < 960)
					{
						var rvdh = (16/9)*rheight;
						w = rvdh + w;
					}
					//if(rheight > w_height)
					//	w = rheight+rheight;

					pHeight = Math.ceil(w / ratio);
					children = jQuery(this).children();

					children.removeClass('ult-make-full-height');

					if(rheight > wx)
						children.addClass('ult-make-full-height');

					//children.css({'width': w,'min-width':w});

					var is_poster = jQuery(this).css('background-image');

					if(!/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent) )
					{
						//children.css({'height':pHeight});
						if(ride=='browser_size'){
							if(rheight > w_height)
								var m_height = rheight;
							else
								var m_height = w_height;
							parent.addClass('video-browser-size');
							parent.find('.upb-background-text-wrapper').addClass('full-browser-size');
							parent.css('min-height',m_height+'px');

							if(parent.find('.upb_video-text-wrapper').length > 0)
							{
								parent.find('.upb_video-text-wrapper').addClass('full-browser-size');
								parent.find('.upb_video-text-wrapper').css('min-height',m_height+'px');
							}
						}
					}
					else
					{
						if(typeof is_poster === 'undefined' || is_poster == 'none')
						{
							children.css({'max-height':'auto','height':'auto'});
							parent.css('min-height','auto');
						}
					}
				});
			};
			resizees();
			//jQuery('.upb_video-bg').parents('.upb_video_class').css('overflow','visible');
			jQuery(window).load(function(){
				resizees();
				resize_ult_seperators();
			});
			jQuery(window).resize(function(){
				resizees();
				resize_ult_seperators();
			});

			// ajax fallback
			jQuery(document).ajaxComplete(function(e, xhr, settings){
				if(jQuery('.upb_content_video, .upb_content_iframe').prev().is('p'))
					jQuery('.upb_content_video, .upb_content_iframe').prev().prev().css('background-image','').css('background-repeat','');
				else
					jQuery('.upb_content_video, .upb_content_iframe').prev().css('background-image','').css('background-repeat','');

				jQuery('.upb_content_video').ultimate_video_bg();
				jQuery('.upb_bg_img').ultimate_bg_shift();
				jQuery('.upb_content_iframe').ultimate_video_bg();
				jQuery('.upb_grad').ultimate_grad_shift();
				jQuery('.upb_color').ultimate_bg_color_shift();
			});

			jQuery('.video-controls').click(function(e) {
				var current_action = jQuery(this).attr('data-action');

				var vdo = jQuery(this).parent().find('.upb_video-src');
				if(current_action == 'pause')
				{
					jQuery(this).attr('data-action','play');
					vdo[0].play();
					jQuery(this).html('<i class="ult-vid-cntrlpause"></i>');
				}
				else
				{
					jQuery(this).attr('data-action','pause');
					vdo[0].pause();
					jQuery(this).html('<i class="ult-vid-cntrlplay"></i>');
				}

				if(vdo.hasClass('enable-on-viewport'))
				{
					vdo.addClass('override-controls');
				}
			});

			/* hide row */
			check_for_hide_row();
			function check_for_hide_row()
			{
				jQuery('.ult-vc-hide-row').each(function(i,row){
					var hide_classes = jQuery(row).data('hide-row');
					if(hide_classes != '')
						jQuery(row).addClass(hide_classes);
				});
			}

			/* use for full width seperator */
			resize_ult_seperators();
			function resize_ult_seperators()
			{
				jQuery('.ult-vc-seperator').each(function(i,s) {
					var full_width = jQuery(this).data('full-width');
					var is_rtl = jQuery(this).parent().data('rtl');

					if(typeof is_rtl == 'undefined')
						is_rtl = 'false';

					var override = jQuery(this).parent().find('.upb_row_bg').data('bg-override');
					if(typeof override == 'undefined')
						var override = jQuery(this).parent().find('.upb_video-bg').data('bg-override');

					if((override == 'ex-full' || override == 'full' || override == 'browser_size') && full_width == true)
					{
						var win = jQuery('html').width();

						if(jQuery(this).hasClass('ult-rounded-split-seperator-wrapper'))
						{
							var border = jQuery(this).data('border');
							var border_width = jQuery(this).data('border-width');
							if(typeof border != 'undefined' && border!='none' && border != 'undefined')
								win = win - border_width;
						}

						var left = jQuery(this).offset().left;
						jQuery(this).find('.ult-main-seperator-inner').width(win);
						if(is_rtl.toString() == 'true')
							jQuery(this).find('.ult-main-seperator-inner').css({'margin-right':-left+'px'});
						else
							jQuery(this).find('.ult-main-seperator-inner').css({'margin-left':-left+'px'});
					}
				});
			}

			//row animation execution
			jQuery('.vcpb-animated').each(function(index, element) {
				var repeat = jQuery(element).data('animation-repeat');
				jQuery(this).css({'background-repeat':repeat});
				var mobile_disable = jQuery(element).parent().attr('data-img-parallax-mobile-disable');
				if(typeof mobile_disable == "undefined")
					mobile_disable = 'false';
				else
					mobile_disable = mobile_disable.toString();
				if(! /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent) )
					var is_mobile = 'false';
				else
					var is_mobile = 'true';
				if(is_mobile == 'true' && mobile_disable == 'true')
					var disable_row_effect = 'true';
				else
					var disable_row_effect = 'false';
				if(disable_row_effect == 'false')
				{
					var scrollSpeed = 10;
					if(jQuery(this).attr('data-parallax_sense') != '')
						scrollSpeed = jQuery(this).attr('data-parallax_sense');

					scrollSpeed = 100 - scrollSpeed;

					var animation_type = jQuery(this).attr('data-bg-animation-type');
					var animation = jQuery(this).attr('data-bg-animation');

					// set the default position
					var current = 0;
					// set the direction
					var direction = animation_type;
					//Calls the scrolling function repeatedly
					setInterval(function(e){
						if(animation == 'right-animation' || animation == 'bottom-animation')
							current -= 1;
						else
							current += 1;
						jQuery(element).css("backgroundPosition", (direction == 'h') ? current+"px 0" : "0 " + current+"px");
					}, scrollSpeed);
				}
			});
	 });
 }( jQuery ));
 
 
 
 jQuery(document).ready(function(){

	function autoChange() {
		jQuery('.wpb_el_type_icon_manager').each(function(i,val){
			var sel = jQuery(this).find('.wpb_txt_icons_block'),
				current_i = (i+1),
				Icon_value = sel.data('old-icon-value'),
				Icon_values = '';

			sel.data('old-icon-value', current_i );
			Icon_values = sel.html();
			Icon_values = Icon_values.replace(Icon_value, current_i);
			
			sel.html(Icon_values);
			sel.find('li').each(function(){
				jQuery(this).attr('id', current_i);
			})
		});
	}

});