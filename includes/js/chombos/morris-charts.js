jQuery(document).ready(function(){

	"use strict";

	Morris.Line({
	  element: 'humidity-placeholder-1',
	  data: [
		{ hour: '00:00', a: 30,  },
		{ hour: '02:00', a: 60,   },
		{ hour: '04:00', a: 50,   },
		{ hour: '06:00', a: 45,  },
		{ hour: '08:00', a: 40,  },
		{ hour: '10:00', a: 20,   },
		{ hour: '12:00', a: 80, },
		{ hour: '14:00', a: 75, },
		{ hour: '16:00', a: 60, },
		{ hour: '18:00', a: 50, },
		{ hour: '20:00', a: 30, },
		{ hour: '22:00', a: 75, },
		{ hour: '24:00', a: 60, }
	  ],
	  xkey: 'hour',
	  ykeys: ['a', ],
	  labels: ['Humidity Level', ],
	  lineColors: ['#4286f4'],
	  parseTime: false
	});

	Morris.Line({
	  element: 'humidity-placeholder-2',
	  data: [
		{ hour: '00:00', a: 10,  },
		{ hour: '02:00', a: 10,   },
		{ hour: '04:00', a: 15,   },
		{ hour: '06:00', a: 50,  },
		{ hour: '08:00', a: 55,  },
		{ hour: '10:00', a: 80,   },
		{ hour: '12:00', a: 83, },
		{ hour: '14:00', a: 75, },
		{ hour: '16:00', a: 60, },
		{ hour: '18:00', a: 55, },
		{ hour: '20:00', a: 40, },
		{ hour: '22:00', a: 30, },
		{ hour: '24:00', a: 10, }
	  ],
	  xkey: 'hour',
	  ykeys: ['a', ],
	  labels: ['Light Level', ],
	  lineColors: ['#f7bd20'],
	  parseTime: false
	});

	Morris.Line({
	  element: 'humidity-placeholder-3',
	  data: [
		{ hour: '00:00', a: 60,  },
		{ hour: '02:00', a: 65,   },
		{ hour: '04:00', a: 65,   },
		{ hour: '06:00', a: 55,  },
		{ hour: '08:00', a: 50,  },
		{ hour: '10:00', a: 40,   },
		{ hour: '12:00', a: 45, },
		{ hour: '14:00', a: 40, },
		{ hour: '16:00', a: 30, },
		{ hour: '18:00', a: 50, },
		{ hour: '20:00', a: 60, },
		{ hour: '22:00', a: 40, },
		{ hour: '24:00', a: 55, }
	  ],
	  xkey: 'hour',
	  ykeys: ['a', ],
	  labels: ['Polution Level', ],
	  lineColors: ['#76f441'],
	  parseTime: false
	});

});