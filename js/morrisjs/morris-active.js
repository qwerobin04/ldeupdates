// Dashboard 1 Morris-chart

Morris.Area({
        element: 'morris-area-chart',
        data: [{
            period: '2012',
            Kick: 0,
            Caramel: 0,
            Earls: 0
        }, {
            period: '2013',
            Kick: 130,
            Caramel: 100,
            Earls: 80
        }, {
            period: '2014',
            Kick: 80,
            Caramel: 60,
            Earls: 70
        }, {
            period: '2015',
            Kick: 70,
            Caramel: 200,
            Earls: 160
        }, {
            period: '2016',
            Kick: 180,
            Caramel: 150,
            Earls: 120
        }, {
            period: '2017',
            Kick: 105,
            Caramel: 100,
            Earls: 90
        },
         {
            period: '2018',
            Kick: 250,
            Caramel: 150,
            Earls: 200
        }],
        xkey: 'period',
        ykeys: ['Kick', 'Caramel', 'Earls'],
        labels: ['Kick', 'Caramel', 'Earls'],
        pointSize: 0,
        fillOpacity: 0.6,
        pointStrokeColors:['#f75b36', '#00b5c2 ', '#008efa'],
        behaveLikeLine: true,
        gridLineColor: '#e0e0e0',
        lineWidth:0,
        hideHover: 'auto',
        lineColors: ['#f75b36', '#00b5c2 ', '#008efa'],
        resize: true

    });

Morris.Area({
        element: 'extra-area-chart',
        data: [{
                    period: '2012',
                    Kick: 0,
                    Caramel: 0,
                    Earls: 0
                }, {
                    period: '2013',
                    Kick: 50,
                    Caramel: 15,
                    Earls: 5
                }, {
                    period: '2014',
                    Kick: 20,
                    Caramel: 50,
                    Earls: 65
                }, {
                    period: '2015',
                    Kick: 60,
                    Caramel: 12,
                    Earls: 7
                }, {
                    period: '2016',
                    Kick: 30,
                    Caramel: 20,
                    Earls: 120
                }, {
                    period: '2017',
                    Kick: 25,
                    Caramel: 80,
                    Earls: 40
                }, {
                    period: '2018',
                    Kick: 10,
                    Caramel: 10,
                    Earls: 10
                }


                ],
                lineColors: ['#f75b36', '#00b5c2', '#8698b7'],
                xkey: 'period',
                ykeys: ['Kick', 'Caramel', 'Earls'],
                labels: ['Kick', 'Caramel', 'Earls'],
                pointSize: 0,
                lineWidth: 0,
                resize:true,
                fillOpacity: 0.8,
                behaveLikeLine: true,
                gridLineColor: '#e0e0e0',
                hideHover: 'auto'

    });
