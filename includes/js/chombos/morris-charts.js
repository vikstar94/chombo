jQuery(document).ready(function(){

	"use strict";

	Morris.Line({
	  element: 'humidity-placeholder',
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

	Morris.Line({
	  element: 'light-placeholder',
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

	Morris.Line({
	  element: 'polution-placeholder',
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