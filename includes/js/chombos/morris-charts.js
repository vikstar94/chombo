jQuery(document).ready(function(){

	"use strict";

	Morris.Line({
	  element: 'humidity-placeholder-1',
	  data: [
		{ y: '2006', a: 10,  },
		{ y: '2007', a: 55,   },
		{ y: '2008', a: 30,   },
		{ y: '2009', a: 65,  },
		{ y: '2010', a: 40,  },
		{ y: '2011', a: 20,   },
		{ y: '2012', a: 80, }
	  ],
	  xkey: 'y',
	  ykeys: ['a', ],
	  labels: ['Series A', ],
	  lineColors: ['#F85D2C']
	});

	Morris.Line({
	  element: 'humidity-placeholder-2',
	  data: [
		{ y: '2006', a: 15,  },
		{ y: '2007', a: 55,   },
		{ y: '2008', a: 50,   },
		{ y: '2009', a: 60,  },
		{ y: '2010', a: 50,  },
		{ y: '2011', a: 80,   },
		{ y: '2012', a: 60, }
	  ],
	  xkey: 'y',
	  ykeys: ['a', ],
	  labels: ['Series A', ],
	  lineColors: ['#F85D2C']
	});

	Morris.Line({
	  element: 'humidity-placeholder-3',
	  data: [
		{ y: '2006', a: 15,  },
		{ y: '2007', a: 55,   },
		{ y: '2008', a: 35,   },
		{ y: '2009', a: 65,  },
		{ y: '2010', a: 50,  },
		{ y: '2011', a: 60,   },
		{ y: '2012', a: 100, }
	  ],
	  xkey: 'y',
	  ykeys: ['a', ],
	  labels: ['Series A', ],
	  lineColors: ['#F85D2C']
	});

});