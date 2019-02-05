<!-- 
	UN id: 17421492
 -->
<?php 
	// Class containing database interaction functions
	class DatabaseQueryTable{
		public $pdo; 
		public $tableName;
		function __construct($pdo, $tableName){
			$this->pdo = $pdo;
			$this->tableName = $tableName;
		}
		// Function to find specific data on a table
		function findData($attribute, $attributeData) {
		        $executionStatement = $this->pdo->prepare('SELECT * FROM ' . $this->tableName . ' WHERE ' . $attribute . ' = :attributeData');
		        $valueCriteria = [
		                'attributeData' => $attributeData
		        ];
		        $executionStatement->execute($valueCriteria);

		        return $executionStatement;
		}
		// Function that determines whether to insert or update
		function save($databaseData, $databasePrimaryKey=''){
		    try {
		        $this->insertToDatabase($databaseData);
		    } 
		    catch (Exception $e) {
		        $this->updateToDatabase($databaseData, $databasePrimaryKey);
		    }
		}
		// Function to insert data on database 
		function insertToDatabase($databaseData) {
		    $queryKeys = array_keys($databaseData);
		    $queryKeyValue = implode(', ', $queryKeys);
		    $queryValues = implode(', :', $queryKeys);

		    $queryDatabase = 'INSERT INTO ' . $this->tableName . ' (' . $queryKeyValue . ') VALUES (:' . $queryValues . ')';

		    $executionStatement = $this->pdo->prepare($queryDatabase);

		    $executionStatement->execute($databaseData);
		}
		// Update row on database
		function updateToDatabase($databaseData, $databasePrimaryKey){
		    $queryDatabase = 'UPDATE ' . $this->tableName. ' SET ';
		    $fields = [];
		    foreach ($databaseData as $attribute => $value) {
		         $fields[] = $attribute . ' = :'. $attribute;
		    } 
		    $queryDatabase .= implode(', ', $fields);
		    $queryDatabase .= ' WHERE ' . $databasePrimaryKey . ' = :databasePrimaryKey';
		    $databaseData['databasePrimaryKey'] = $databaseData[$databasePrimaryKey];
		    $executionStatement = $this->pdo->prepare($queryDatabase);
		    $executionStatement->execute($databaseData);
		}
		// Find all data of a specific table
		function findAllData() {
		        $executionStatement = $this->pdo->prepare('SELECT * FROM ' . $this->tableName );
		        $executionStatement->execute();
		        return $executionStatement;
		}
		// Delete record on a table
		function deleteRecord($attribute, $attributeData){
		    $executionStatement = $this->pdo->prepare('DELETE FROM ' . $this->tableName . ' WHERE ' . $attribute . ' = :attributeData');
		    $valueCriteria = [
					'attributeData' => $attributeData
		        ];
		        $executionStatement->execute($valueCriteria);
		        return $executionStatement;
		}
	}
?>