<?php
	namespace classs;

	class htmltools
	{
		public static function prints(Array $record) {
			$x = '<h1> <img src="' . $record[0]['user']['profile_image_url'] . '"> ' . $record[0]['user']['name'] . ' Tweets </h1>';
			$x .= '<h3>' . $record[0]['user']['created_at'] . ' Time and Date of Tweet</h3>';     
			$x .= '<h3>' . $record[0]['user']['followers_count'] . ' Followers</h3>';
			$x .= '<h3>' . $record[0]['user']['friends_count'] . ' Friends</h3>';
			$x .= '<h3>' . $record[0]['user']['listed_count'] . ' Listed</h3>';
			$x .= '<h3>' . $record[0]['user']['screen_name'] . ' Screen name</h3>';

		
		     //   echo "Listed: ". $items['user']['listed_count']."<br /><hr />";
			foreach($record as $records) {
				$x .= '<table border="1" cellpadding="10"><tr><td><p>' . $records['text'] . '</p></td></tr></table>';
			}

			return $x;
		} 
		
		public static function Profile(Array $record) {
			echo '<table border=1>';
			$y;
			$index = -1;
			foreach($record as $records) {
				$index++;
				if($index === 0) {
					foreach($records['user'] as $key => $value) {
						$y .=  first($key) . $value ; 
					}
				}
			}
			echo '</table>';
			$y;

			return $y;
		}

	}
?>