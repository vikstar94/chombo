jQuery(window).load(function() 
{

	 "use strict";

		
	jQuery(window).on("resize", function(){
		plot.resize();
		plot.setupGrid();
		plot.draw();
	});
			

	jQuery.fn.UseTooltip = function () {
		var previousPoint = null;
		 
		jQuery(this).bind("plothover", function (event, pos, item) {        
				if (item) {
					if (previousPoint != item.dataIndex) {
	
						previousPoint = item.dataIndex;
	
						$("#tooltip").remove();
						var x = item.datapoint[0].toFixed(2),
						y = item.datapoint[1].toFixed(2);

	
						showTooltip(item.pageX, item.pageY,
							"<p class='vd_bg-green'><strong class='mgr-10 mgl-10'>" + Math.round(x)  + " NOV 2013 </strong></p>" +
							"<div style='padding: 0 10px 10px;'>" +
							"<div>" + item.series.label +": <strong>$ "+ Math.round(y)  +"</strong></div>" +
							"</div>"
						);
					}
				} else {
					jQuery("#tooltip").remove();
					previousPoint = null;            
				}
		});
	};
	 
	function showTooltip(x, y, contents) {
		jQuery('<div id="tooltip">' + contents + '</div>').css({
			position: 'absolute',
			display: 'none',
			top: y + 5,
			left: x + 20,    
			size: '10',  
//				'border-top' : '3px solid #1FAE66',
			'background-color': '#111111',
			color: "#FFFFFF",
			opacity: 0.85
		}).appendTo("body").fadeIn(200);
	}

	var data = [],
		totalPoints = 300;

	function getRandomData() {

		if (data.length > 0)
			data = data.slice(1);

		// Do a random walk

		while (data.length < totalPoints) {

			var prev = data.length > 0 ? data[data.length - 1] : 50,
				y = prev + Math.random() * 10 - 5;

			if (y < 0) {
				y = 0;
			} else if (y > 100) {
				y = 100;
			}

			data.push(y);
		}

		// Zip the generated y values with the x values

		var res = [];
		for (var i = 0; i < data.length; ++i) {
			res.push([i, data[i]])
		}

		return res;
	}

	// Set up the control widget

	var updateInterval = 30;
	jQuery("#updateInterval").val(updateInterval).change(function () {
		var v = $(this).val();
		if (v && !isNaN(+v)) {
			updateInterval = +v;
			if (updateInterval < 1) {
				updateInterval = 1;
			} else if (updateInterval > 2000) {
				updateInterval = 2000;
			}
			jQuery(this).val("" + updateInterval);
		}
	});

	var realtime_chart = jQuery.plot("#realtime-chart", [ getRandomData() ], {
		series: {
			shadowSize: 0,	// Drawing is faster without shadows
			lines: {
				fill: true,
				fillColor: "#ffe29c",
			},
			color: "#ffe29c", 
		},
		yaxis: {
			min: 0,
			max: 100
		},
		xaxis: {
			show: false
		},
		grid: {
			borderWidth: 0
		},
		
	});

	function update() {
		realtime_chart .setData([getRandomData()]);

		// Since the axes don't change, we don't need to call plot.setupGrid()
		realtime_chart .draw();
		setTimeout(update, updateInterval);
	}

	update();
}
);