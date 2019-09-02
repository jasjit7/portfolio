var chart = c3.generate({
	bindto: '#chart',
    data: {
        columns: [
            ['Percentage', 38.26, 23.23, 13.22, 11.57, 3.64, 3.12, 2.63, 2.13, 1.48, 0.41, 0.10, 0.10],
            ['Growth Rate', '4.64', '3.31', '5.64', '11.57', '5.80', '6.29', '0.20', '0.54', '1.01', '1.93', '12.66', '5.83']
        ],
        type: 'bar'
    },
    bar: {
        width: {
            ratio: 0.5 // this makes bar width 50% of length between ticks
        }
        
    },
	legend:{
        position: 'bottom'
	},
	color: {
        pattern: ['indigo', 'springgreen']
    },
	axis: {
        x: {
            type: 'category',
            categories: ['Ontario', 'Quebec', 'British Columbia', 'Alberta', 'Manitoba', 'Saskatchewan', 'Nova Scotia', 'New Brunswick', 'Newfoundland', 'Prince Edward Island', 'Nunavut', 'Yukon'],
			label:{
				text: 'Provinces in Canada-->',
				position: 'outer-left'
			}
        },
		y: {
            label: {
                text: 'Population  and Growth Rate of Provinces in Canada(%)',
                position: 'outer-left'
            }
        }
    },
	size: {
  width: 1000
}
});


