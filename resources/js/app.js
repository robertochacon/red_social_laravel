new Vue({
el: '#crud',
created:function(){
	this.getKeeps();
},
data:{
	keeps: [],
	newKeep: '',
	errors: [],
	fillKeep: {'id':'','keep':''}
},
methods:{
	getKeeps:function(){
		var url = 'Task';
		axios.get(url).then(response => {
			this.keeps = response.data;
		})
	},
	editKeep:function(keep){
		this.fillKeep.id = keep.id;
		this.fillKeep.keep = keep.keep;
		$('#edit').modal('show');
	},
	updateKeep:function(id){
		// alert('good edit');
		var url = 'Task/' + id;
		axios.put(url,this.fillKeep).then(response => {
			this.getKeeps();
			this.fillKeep = {'id':'','keep':''};
			this.errors = [];
			$('#edit').modal('hide');
			toastr.success('Tarea actualizada correctamente!');
		}).catch(error => {
			this.errors = error.response.data;
			toastr.danger('Error al actualizada tarea!');
		})
	},
	deleteKeeps:function(keep){
		var url = 'Task/' + keep.id;
		axios.delete(url).then(response => {
			this.getKeeps();
			// alert('eliminado');
			toastr.success('Eliminado Correctamente');
		}).catch(response => {
			toastr.danger('Error al eliminar este registro');
		});
	},
	createKeep:function(){
		var url = 'Task';
		axios.post(url, {
			keep:this.newKeep
		}).then(response => {
			this.getKeeps();
			this.newKeep = '';
			this.errors = [];
			$('#create').modal('hide');
			toastr.success('Tarea guardada correctamente!');
		}).catch(error => {
			this.errors = error;
			toastr.danger('Error al guardar tarea');
		});
	}
}

});