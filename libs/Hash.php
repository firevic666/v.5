<?php

class Hash {
    /**
     * 
     * @param string $algo
     * @param string $salt
     * @param string $data 
     * @return string
     * 
     */
    
  	public static function create($algo, $data, $salt)
	{
		
		$context = hash_init($algo, HASH_HMAC, $salt);
		hash_update($context, $data);
		
		return hash_final($context);
		
	}
}

?>
