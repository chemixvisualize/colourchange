$(function(){
	var $stageContainer = $("#drop1");
		var stageOffset = $stageContainer.offset();
		//var offsetX = stageOffset.left;
		//var offsetY = stageOffset.top;
		//var object_name;
		//var object_position_x;
		var imageCount = -1;
		var imageSrc = [
			"bureette3.png","bre.png" ];

			for (var i = 0; i  < imageSrc.length; i++) {
			(function() {
				var $drag, image;
				var $drag = $("#drag"+i);
				$drag.hide();
				image = new Image();
				image.onload = function () {
					$drag.show();
				}
				image.src = imageSrc[i];
				$drag.draggable({helper: 'clone'});
				$drag.data("url", "lense.png");
				$drag.data("image", image); 
			})();
		}