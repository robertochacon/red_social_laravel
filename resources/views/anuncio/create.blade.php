<form method="POST" v-on:submit.prevent="createKeep()">
<div class="modal fade" id="create">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h4>Nueva Anuncio</h4>
				<button type="button" class="close" data-dismiss="modal">
					<span>&times;</span>
				</button>
			</div>
			<div class="modal-body">
			<!-- 	<input type="text" name="keep" class="form-control" v-model="newKeep" placeholder="Nueva tarea">
				<span v-for="error in errors">@{{ error }}</span> -->
			</div>
			<div class="modal-footer">
				<input type="submit" class="btn btn-primary" value="Guardar">
			</div>
		</div>
	</div>
</div>
</form>