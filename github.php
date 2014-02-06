
      $id = $commit->id;
      $url = $commit->url;
 
  
      
      $response = $client->get($api . '/' . $id . '?access_token=' . $githubToken)->send();

    
      $headers  = 'MIME-Version: 1.0' . "\r\n";
      $headers .= 'Content-type: text/html; charset=utf-8' . "\r\n";
      $headers .= 'From: ' . $commit->author->name . ' <' . $from . '>' . "\r\n";
      $headers .= 'Reply-To: ' . $commit->author->email . "\r\n";
      mail($to, $subject, $message, $headers);