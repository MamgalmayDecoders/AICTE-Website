var data = [
     { y: 'Universities', a: 201, b: 378},
      { y: 'Colleges', a: 12342,  b: 18064},
      { y: 'NAAC\nAccredited\nUniversities', a: 61,  b: 140},
      { y: 'NAAC\nAccredited\nColleges', a: 198,  b: 3492},
      { y: 'Enrolment\n(lakh)', a: 75,  b: 140}
    ],
    config = {
      data: data,
      xkey: 'y',
      ykeys: ['a', 'b'],
      labels: ['Year 2002', 'Year 2007'],
      fillOpacity: 0.6,
      hideHover: 'auto',
	  gridTextSize:8,
	  xLabelAngle: 0,
      behaveLikeLine: true,
      resize: true,
      pointFillColors:['#ffffff'],
      pointStrokeColors: ['black'],
      lineColors:['gray','red']
  };

config.element = 'bar-chart';
Morris.Bar(config);



Morris.Donut({
  element: 'pie-charta',
  data: [
    {label: "2001-02", value: 1083476},
    {label: "2002-03", value: 1104424},
	{label: "2003-04", value: 1189834},
	{label: "2004-05", value: 1264475},
	{label: "2005-06", value: 1241728},
	{label: "2006-07", value: 1328576},
	{label: "2007-08", value: 1359823},
	{label: "2008-09", value: 1386302},
	{label: "2009-10", value: 1458915},
	{label: "2010-11", value: 1469668}
  ]
});




Morris.Donut({
  element: 'pie-chartb',
  data: [
    {label: "1985-86+", value: 9211.86},
    {label: "1990-91", value: 20761.33},
	{label: "1995-96", value: 38768.69},
	{label: "1998-99", value: 62019.50},
	{label: "1999-00", value: 75149.88},
	{label: "2000-01", value: 82879.16},
	{label: "2001-02", value: 80505.97},
	{label: "2002-03", value: 85889.39},
	{label: "2003-04", value: 89731.63},
	{label: "2004-05", value: 97374.77},
	{label: "2005-06", value: 114388.82},
	{label: "2006-07+", value: 139722.38},
	{label: "2007-08*", value: 159237.35}
  ]
});


Morris.Donut({
  element: 'pie-chartc',
  data: [
    {label: "School and Secondary\nEducation(crore)", value: 343028},
    {label: "Higher Education(crore)", value: 110700}
	
  ]
});
