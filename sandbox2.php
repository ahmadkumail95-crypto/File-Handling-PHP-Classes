
<?php 


// Classes and Objects in PHP

		class User {

			private $email;
			private $name;

			public function __construct($name, $email){
				// $this->name = 'mario';
				// $this->email = 'mario@thenetninja.co.uk';
				$this->name = $name;
				$this->email = $email;
			}

			public function login(){
				// echo 'the user logged in';
				echo $this->name . ' logged in';
			}

			public function getName(){
				return $this->name;
			}

			public function setName($name) {
    // Trim spaces before/after
    $name = trim($name);

    // 1️⃣ Check if it's a string
    if (!is_string($name)) {
        return 'Name must be a string.';
    }

    // 2️⃣ Check if not empty
    if (empty($name)) {
        return 'Name cannot be empty.';
    }

    // 3️⃣ Check length (min 3, max 30)
    if (strlen($name) < 3 || strlen($name) > 30) {
        return 'Name must be between 3 and 30 characters.';
    }

    // 4️⃣ Check if it only has letters and spaces
    if (!preg_match('/^[a-zA-Z\s]+$/', $name)) {
        return 'Name can only contain letters and spaces.';
    }

    // 5️⃣ Optional: disallow multiple spaces or leading/trailing spaces
    if (preg_match('/\s{2,}/', $name)) {
        return 'Name cannot contain multiple consecutive spaces.';
    }

    // ✅ All checks passed
    $this->name = $name;
    return "Name updated to $name.";
}

			}

	

		$userTwo = new User('Behram', 'killer@jj.com');

		// $userTwo->name = 'mario';
		// echo $userTwo->name;

		// echo $userTwo->getName();
	 	 echo $userTwo->setName('Snow');
	 echo $userTwo->getName();











// File System in PHP

	
	 // $quotes = readfile("quotes.txt");
	 // echo $quotes;

// 	$file = 'quotes.txt';

// 	// if (file_exists($file)){

// 	// 	// read file
// 	// 	echo readfile($file) . '<br />';

// 	// 	// // copy file
// 	// 	copy($file, 'q.txt');

// 	// // 	// absolute path
// 	// // 	echo realpath($file) . '<br />';

// 	// // 	// file size
// 	// 	echo filesize($file) . '<br />';

// 	// // 	// rename the file
// 	// // 	// rename($file, 'test.txt');

// 	// } else {
// 	// 	echo 'file does not exist';
// 	// }

// 	// // make directory
// 	// mkdir('test2');



// 	// $file = 'readme.txt'; 
	
// 	// //opening a file for reading
// 	 $handle = fopen($file, 'r');

// 	// // read the file
// 	// echo fread($handle, filesize($file));
// 	echo fread($handle, 112);

// 	// // read a single line
// 	// echo fgets($handle);
// 	// echo fgets($handle);

// 	// // read a single character
// 	// // echo fgetc($handle);
// 	// // echo fgetc($handle);

// 	// $handle = fopen($file, 'r+');
// 	 $handle = fopen($file, 'a+');

// 	// // writing to a file
// 	 fwrite($handle, "\nEverything popular is wrong.");

// 	fclose($handle);	

// 	 unlink($file);



// ?>
