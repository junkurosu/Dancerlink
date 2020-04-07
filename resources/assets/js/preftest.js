window.axios = require('axios');

window.axios.defaults.headers.common = {
	'X-Requested-With': 'XMLHttpRequest',
	'X-CSRF-TOKEN' : document.querySelector('meta[name="csrf-token"]').getAttribute('content')
};

import Preftest from './components/Preftest.vue';
import Preftest2 from './components/Preftest2.vue';


const app = new Vue({
	el: '#preftest',
	components : {
		Preftest
	}
});
		new Vue({
	el: '#preftest2',
	components : {
		Preftest2
	}
});




	


// app.component('preftest', require('./components/Preftest.vue').default);

