var Util = function(){
	
};

Util.prototype.createBlock = function(option){

	var anchor = $('#' + option.anchorId);
	
	var text = $(document.createElement('span'));
	text.appendTo(anchor);
	text.attr('id', option.textId);
	text.html(option.text);
	var textHeight = text.height();
	var textWidth = text.width();

	anchor.empty();
	var text = $(document.createElement('div'));
	text.appendTo(anchor);
	text.attr('id', option.textId);
	text.html(option.text);
	text.height(textHeight);
	text.width(textWidth);

	var anchorHeight = anchor.height();
	var top = Math.ceil((anchorHeight - textHeight) / 2);
	text.css('padding-top', top + 'px');
	
};

Util.scroll2Top = function(){

	var $body = (window.opera) ? (document.compatMode == "CSS1Compat" ? $('html') : $('body')) : $('html,body');
	$body.animate({
		scrollTop: 0
	}, 300);
	
};

Util.getAcrobatInfo = function() {
	 
	  var getBrowserName = function() {
	    return this.name = this.name || function() {
	      var userAgent = navigator ? navigator.userAgent.toLowerCase() : "other";
	 
	      if(userAgent.indexOf("chrome") > -1)        return "chrome";
	      else if(userAgent.indexOf("safari") > -1)   return "safari";
	      else if(userAgent.indexOf("msie") > -1)     return "ie";
	      else if(userAgent.indexOf("firefox") > -1)  return "firefox";
	      return userAgent;
	    }();
	  };
	 
	  var getActiveXObject = function(name) {
	    try { return new ActiveXObject(name); } catch(e) {}
	  };
	 
	  var getNavigatorPlugin = function(name) {
	    for(key in navigator.plugins) {
	      var plugin = navigator.plugins[key];
	      if(plugin.name == name) return plugin;
	    }
	  };
	 
	  var getPDFPlugin = function() {
	    return this.plugin = this.plugin || function() {
	      if(getBrowserName() == 'ie') {
	        //
	        // load the activeX control
	        // AcroPDF.PDF is used by version 7 and later
	        // PDF.PdfCtrl is used by version 6 and earlier
	        return getActiveXObject('AcroPDF.PDF') || getActiveXObject('PDF.PdfCtrl');
	      }
	      else {
	        return getNavigatorPlugin('Adobe Acrobat') || getNavigatorPlugin('Chrome PDF Viewer') || getNavigatorPlugin('WebKit built-in PDF');
	      }
	    }();
	  };
	 
	  var isAcrobatInstalled = function() {
	    return !!getPDFPlugin();
	  };
	 
	  var getAcrobatVersion = function() {
	    try {
	      var plugin = getPDFPlugin();
	 
	      if(getBrowserName() == 'ie') {
	        var versions = plugin.GetVersions().split(',');
	        var latest   = versions[0].split('=');
	        return parseFloat(latest[1]);
	      }
	 
	      if(plugin.version) return parseInt(plugin.version);
	      return plugin.name
	      
	    }
	    catch(e) {
	      return null;
	    }
	  }
	 
	  //
	  // The returned object
	  // 
	  return {
	    browser:        getBrowserName(),
	    acrobat:        isAcrobatInstalled() ? true : false,
	    acrobatVersion: getAcrobatVersion()
	  };
};

Util.isLeapYear = function(year){

	if(year % 400 == 0)
		return true;
	else if(year % 100 == 0)
		return false;
	else if(year % 4 == 0)
		return true;
	else
		return false;
	
};


