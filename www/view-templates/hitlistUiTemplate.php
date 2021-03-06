<script id="hitlistUiTemplate" type="text/template">

	<div class="container default-margins">

		<div class="row">
			<div class="ten columns tabs result-tabs"></div>
			<div class="two columns">
				<select class="aggregation-select u-pull-right" style="margin-right: 10px">
					<option value="authors">Författare</option>
					<option value="gender">Kön</option>
					<option value="works">Verk</option>
					<option value="mediatype">Mediatyp</option>
					<option value="texttype">Texttyp</option>
				</select>
			</div>
		</div>

		<div class="row">
			<div class="barchart-container"></div>
		</div>

		<div class="row">

			<div class="twelve columns doc-list">
				<div class="list-header">
					
					<div class="list-sort-menu list-options-menu popup-controller">
						
						<button class="menu-button sort"><span class="list-sort-label">Sorterat fallande på relevans</span></button>

						<div class="menu-content popup-container">

							<div class="menu-item sort-menu-item"><span class="item-label selected" data-field="score">Relevans</span> 
								<button class="sort-button arrow-down selected" data-field="score" data-order="desc" title="Fallande"></button>
								<button class="sort-button arrow-up" data-field="score" data-order="asc" title="Stigande"></button>
							</div>

							<div class="u-cf"></div>

							<div class="menu-item sort-menu-item"><span class="item-label" data-field="date">Datum</span> 
								<button class="sort-button arrow-down" data-field="date" data-order="desc" title="Fallande"></button>
								<button class="sort-button arrow-up" data-field="date" data-order="asc" title="Stigande"></button>
							</div>

							<div class="u-cf"></div>

							<div class="menu-item sort-menu-item"><span class="item-label" data-field="title">Titel</span> 
								<button class="sort-button arrow-down" data-field="title" data-order="desc" title="Fallande"></button>
								<button class="sort-button arrow-up" data-field="title" data-order="asc" title="Stigande"></button>
							</div>
							
						</div>

					</div>

				</div>
				<div class="list-container"></div>
			</div>

			<div class="no-results-overlay">Inga träffar</div>

			<div class="loading-overlay"></div>
		
		</div>

		<div class="row" style="margin-top: 20px">
			<div class="twelve columns text-center">
				<p class="page-info"></p>
				<a class="button button-primary load-more-button">Se fler resultat</a>
			</div>
		</div>

	</div>

</script>