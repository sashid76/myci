jQuery.noConflict()(function($){
    $(document).ready(function(){

    	//http://www.jstorage.info

    	$.jStorage.reInit()
    	//$.jStorage.set("appname","student portal");
    	//$.jStorage.set("apptitle","student portal");

    	//value = $.jStorage.get("apptitle");
    	//console.log(value);

		var index = $.jStorage.index();
		console.log('myindex :' + index); // ["key1","key2","key3"]

		var storagesize = $.jStorage.storageSize();
		console.log('local storage size : ' + storagesize);

		var availablelocalstorage = $.jStorage.storageAvailable();
		console.log('available storage size : ' + availablelocalstorage);

		var backend = $.jStorage.currentBackend();
		console.log('backend : ' + backend);

		$.jStorage.flush();

    });
});