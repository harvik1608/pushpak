<?php 
	function fetchData($file)
	{
		$path = __DIR__."/json/".$file;
		$data = json_decode(file_get_contents($path),true);
		return $data;
	}

	function storeData($file,$data)
	{
		$path = __DIR__."/json/".$file;
		// $data = json_decode(file_get_contents($path),true);
		file_put_contents($path, json_encode($data, JSON_PRETTY_PRINT));
	}

	function fetchRowData($file,$no)
	{
		$path = __DIR__."/json/".$file;
		$data = json_decode(file_get_contents($path),true);
		if($data) {
			foreach($data as $row) {
				if($row["no"] == $no) {
					return $row;
				}
			}
		}
		return [];
	}

	function insertData($file, $new_data)
	{
	    $path = __DIR__."/json/" . $file;

	    // Check if file exists
	    if (!file_exists($path)) {
	        // Create file with empty array if it doesn't exist
	        file_put_contents($path, json_encode([]));
	    }

	    // Read and decode old data
	    $old_data = json_decode(file_get_contents($path), true);

	    // Push new data
	    array_push($old_data, $new_data);

	    // Encode and save back to file
	    file_put_contents($path, json_encode($old_data, JSON_PRETTY_PRINT));
	}

	function updateData($file,$no,$data)
	{
		$path = __DIR__."/json/" . $file;
		$result = fetchData($file);
		if($result) {
			foreach($result as $key => $val) {
				if($val["no"] == $no) {
					$result[$key] = $data;
				}
			}
		}
		file_put_contents($path, json_encode($result, JSON_PRETTY_PRINT));
	}

	function removeData($file,$no)
	{
		$path = __DIR__."/json/".$file;
		$result = fetchData($file);
		if($result) {
			foreach($result as $key => $val) {
				if($val["no"] == $no) {
					unset($result[$key]);
				}
			}
		}
		if($result) {
			file_put_contents($path, json_encode(array_values($result), JSON_PRETTY_PRINT));
		} else {
			file_put_contents($path, json_encode([]));
		}
	}

	function truncateData($file)
	{
		$path = __DIR__."/json/".$file;
		if($file == "settings.json") {
			file_put_contents($path, json_encode([]));
		} else {	
		    if (!file_exists($path)) {
		    	file_put_contents($path, json_encode([]));
		    }
		}
	}

	function base_url()
	{
		return "https://wetechnomind.com/admin/uploads/";
	}
?>