<!-- 
	UN id: 17421492
 -->
 <?php 
	class GenerateTableFunction{
		public $columnTitle;
		public $rowGetter = [];
		// Function to store column title
		public function setColumnTitle($columnTitle){
			$this->columnTitle = $columnTitle;
		}
		// Function to store data on row
		public function setDataOnRow($rowSetter){
			$this->rowGetter[] = $rowSetter;
		}
		// Funcion to generate HTML template 
		public function getterHTML(){
			$tableGenerator = "";
			//Generate tags of table like table, thead, tr 
			$tableGenerator .= "<table><thead><tr>";
			foreach ($this->columnTitle as $cols) {
				//Add column Title for table
				$tableGenerator .= "<th>$cols</th>";
			}
			$tableGenerator .= "</tr></thead><tbody>";
			foreach ($this->rowGetter as $rowOnTableSetter) {
				$tableGenerator .= "<tr>";
				foreach ($rowOnTableSetter as $getDataForRow) {
					//Add row and data on table
					$tableGenerator .= "<td>$getDataForRow</td>";
				}
				$tableGenerator .= "</tr>";
			}
			$tableGenerator .= "</tbody></table>";
			return $tableGenerator;
		}
	}
?>
