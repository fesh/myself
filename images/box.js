/**
 *
 * Created by Administrator on 2015/1/30.
 */
define(function (require) {
	var Class = require("core/Class");
//	var Event = require("core/Events");
//	var utils = require("utils/Utils");

	var box = Class.create({
		initialize:function(img, tag) {
			this.img = img;
			this.tag = tag;
		}

	});
	return box;
});
