let myChart = document.getElementById('myChart').getContext('2d');
		
		let massPopChart = new Chart(myChart, {
    // The type of chart we want to create
    type: 'pie',

    // The data for our dataset
    data: {
        labels: ['Ontario', 'Quebec', 'British Columbia', 'Alberta', 'Manitoba', 'Saskatchewan', 'Nova Scotia', 'New Brunswick', 'Newfoundland', 'Prince Edward Island', 'Nunavut', 'Yukon'],
        datasets: [
			{
				label: 'Population',
				backgroundColor: [
					'#FD3F27',
					'#169B6E',
					'#9D3898',
					'#FE3308',
					'#FFFF00',
					'#9A3D02',
					'#FFC44F',
					'#FF803E',
					'#ECFF53',
					'#FFD760',
					'#F0439D',
					'#169B6E'
				  ],
				data: [38.26, 23.23, 13.22, 11.57, 3.64, 3.12, 2.63, 2.13, 1.48, 0.41, 0.10, 0.10],
				weight:0.1,

        	}]
    	},
			
			// Configuration options go here
		options: {
			title:{
			  display:true,
			  text:'Population of Provinces in Canada(%)',
			  fontSize:25
			},
			legend:{
			  display:true,
			  position:'right',
			  labels:{
				fontColor:'#000'
			  }
			},
			layout:{
			  padding:{
				left:200,
				right:200,
				top:0,
				bottom:0,
			  }
			},
			tooltips:{
			  enabled:true
			}
		}
	});