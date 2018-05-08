<!DOCTYPE html>
<html>
<head>
	<title>js test</title>
</head>
<body>
<button onclick="test()">Test</button>
<script type="text/javascript">
	function test()
	{
		
		var tableMap = {
		  		"196": {
		            "id": 196,
		            "sourceId": "EncryptionTable.csv",
		            "dsStructureName": "HDFS_File",
		            "dataType": null,
		            "format": null,
		            "path": "ToAudit",
		            "leaf": true
		        },
		        "199": {
		            "id": 199,
		            "sourceId": "F1.csv",
		            "dsStructureName": "HDFS_File",
		            "dataType": null,
		            "format": null,
		            "path": "test_D1",
		            "leaf": true
		        },
		        "208": {
		            "id": 208,
		            "sourceId": "F31.csv",
		            "dsStructureName": "HDFS_File",
		            "dataType": null,
		            "format": null,
		            "path": "test_D3/test_D31/test_D311/test_D3111",
		            "leaf": true
		        },
		        "209": {
		            "id": 209,
		            "sourceId": "F2.csv",
		            "dsStructureName": "HDFS_File",
		            "dataType": null,
		            "format": null,
		            "path": "test_D2/test_D21/test_D211",
		            "leaf": true
		        },
		        "210": {
		            "id": 210,
		            "sourceId": "F31.csv",
		            "dsStructureName": "HDFS_File",
		            "dataType": null,
		            "format": null,
		            "path": "test_D3/test_D31",
		            "leaf": true
		        },
		        "211": {
		            "id": 211,
		            "sourceId": "audittest.txt",
		            "dsStructureName": "HDFS_File",
		            "dataType": null,
		            "format": null,
		            "path": "ToAudit",
		            "leaf": true
		        },
		        "212": {
		            "id": 212,
		            "sourceId": "F3.csv",
		            "dsStructureName": "HDFS_File",
		            "dataType": null,
		            "format": null,
		            "path": "test_D2/test_D21/test_D212",
		            "leaf": true
		        },
		       "394":{  
        	      "id":394,
        	      "sourceId":"File21.csv",
        	      "dsStructureName":"S3_Structured_File",
        	      "dataType":null,
        	      "format":null,
        	      "path":"dolphindatav1/Test-Dir2/Test-Dir21/",
        	      "leaf":false
        	   },
        	   "399":{  
        	      "id":399,
        	      "sourceId":"File22.csv",
        	      "dsStructureName":"S3_Structured_File",
        	      "dataType":null,
        	      "format":null,
        	      "path":"dolphindatav1/Test-Dir2/Test-Dir22/Test-Dir222",
        	      "leaf":false
        	   }
		    };
		var arr = Object.keys(tableMap).map(function(k) { return tableMap[k] });
		for(var i = 0 ; i < arr.length; i++)
		{
			var string = arr[i].path;
			var array = string.split("/");
			if(array.length > 1)
			{
				var prev_path = '';
				for(var j = 0 ; j < array.length; j++)
				{
					prev_path = array[j];
					//creat dir and get last array index and put file
				}
			}
			else
			{
				//creat dir and put file
			}
		}
	}
</script>
</body>
</html>