<?php
/**
 *  Copyright 2011 Wordnik, Inc.
 *
 *  Licensed under the Apache License, Version 2.0 (the "License");
 *  you may not use this file except in compliance with the License.
 *  You may obtain a copy of the License at
 *
 *      http://www.apache.org/licenses/LICENSE-2.0
 *
 *  Unless required by applicable law or agreed to in writing, software
 *  distributed under the License is distributed on an "AS IS" BASIS,
 *  WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 *  See the License for the specific language governing permissions and
 *  limitations under the License.
 */

/**
 *
 * NOTE: This class is auto generated by the swagger code generator program. Do not edit the class manually.
 */
class WordApi {

	function __construct($apiClient) {
	  $this->apiClient = $apiClient;
	}

  /**
	 * getExamples
	 * Returns examples for a word
   * word, string: Word to return examples for (required)
   * includeDuplicates, string: Show duplicate examples from different sources (optional)
   * useCanonical, string: If true will try to return the correct word root ('cats' -&gt; 'cat'). If false returns exactly what was requested. (optional)
   * skip, int: Results to skip (optional)
   * limit, int: Maximum number of results to return (optional)
   * @return ExampleSearchResults
	 */

   public function getExamples($word, $includeDuplicates=null, $useCanonical=null, $skip=null, $limit=null) {

  		//parse inputs
  		$resourcePath = "/word.{format}/{word}/examples";
  		$resourcePath = str_replace("{format}", "json", $resourcePath);
  		$method = "GET";
      $queryParams = array();
      $headerParams = array();

      if($includeDuplicates != null) {
  		  $queryParams['includeDuplicates'] = $this->apiClient->toPathValue($includeDuplicates);
  		}
  		if($useCanonical != null) {
  		  $queryParams['useCanonical'] = $this->apiClient->toPathValue($useCanonical);
  		}
  		if($skip != null) {
  		  $queryParams['skip'] = $this->apiClient->toPathValue($skip);
  		}
  		if($limit != null) {
  		  $queryParams['limit'] = $this->apiClient->toPathValue($limit);
  		}
  		if($word != null) {
  			$resourcePath = str_replace("{" . "word" . "}",
  			                            $this->apiClient->toPathValue($word), $resourcePath);
  		}
  		//make the API Call
      if (! isset($body)) {
        $body = null;
      }
  		$response = $this->apiClient->callAPI($resourcePath, $method,
  		                                      $queryParams, $body,
  		                                      $headerParams);


      if(! $response){
          return null;
        }

  		$responseObject = $this->apiClient->deserialize($response,
  		                                                'ExampleSearchResults');
  		return $responseObject;

      }
  /**
	 * getWord
	 * Given a word as a string, returns the WordObject that represents it
   * word, string: String value of WordObject to return (required)
   * useCanonical, string: If true will try to return the correct word root ('cats' -&gt; 'cat'). If false returns exactly what was requested. (optional)
   * includeSuggestions, string: Return suggestions (for correct spelling, case variants, etc.) (optional)
   * @return WordObject
	 */

   public function getWord($word, $useCanonical=null, $includeSuggestions=null) {

  		//parse inputs
  		$resourcePath = "/word.{format}/{word}";
  		$resourcePath = str_replace("{format}", "json", $resourcePath);
  		$method = "GET";
      $queryParams = array();
      $headerParams = array();

      if($useCanonical != null) {
  		  $queryParams['useCanonical'] = $this->apiClient->toPathValue($useCanonical);
  		}
  		if($includeSuggestions != null) {
  		  $queryParams['includeSuggestions'] = $this->apiClient->toPathValue($includeSuggestions);
  		}
  		if($word != null) {
  			$resourcePath = str_replace("{" . "word" . "}",
  			                            $this->apiClient->toPathValue($word), $resourcePath);
  		}
  		//make the API Call
      if (! isset($body)) {
        $body = null;
      }
  		$response = $this->apiClient->callAPI($resourcePath, $method,
  		                                      $queryParams, $body,
  		                                      $headerParams);


      if(! $response){
          return null;
        }

  		$responseObject = $this->apiClient->deserialize($response,
  		                                                'WordObject');
  		return $responseObject;

      }
  /**
	 * getDefinitions
	 * Return definitions for a word
   * word, string: Word to return definitions for (required)
   * partOfSpeech, string: CSV list of part-of-speech types (optional)
   * sourceDictionaries, string: Source dictionary to return definitions from.  If 'all' is received, results are returned from all sources. If multiple values are received (e.g. 'century,wiktionary'), results are returned from the first specified dictionary that has definitions. If left blank, results are returned from the first dictionary that has definitions. By default, dictionaries are searched in this order: ahd, wiktionary, webster, century, wordnet (optional)
   * limit, int: Maximum number of results to return (optional)
   * includeRelated, string: Return related words with definitions (optional)
   * useCanonical, string: If true will try to return the correct word root ('cats' -&gt; 'cat'). If false returns exactly what was requested. (optional)
   * includeTags, string: Return a closed set of XML tags in response (optional)
   * @return array[Definition]
	 */

   public function getDefinitions($word, $partOfSpeech=null, $sourceDictionaries=null, $limit=null, $includeRelated=null, $useCanonical=null, $includeTags=null) {

  		//parse inputs
  		$resourcePath = "/word.{format}/{word}/definitions";
  		$resourcePath = str_replace("{format}", "json", $resourcePath);
  		$method = "GET";
      $queryParams = array();
      $headerParams = array();

      if($limit != null) {
  		  $queryParams['limit'] = $this->apiClient->toPathValue($limit);
  		}
  		if($partOfSpeech != null) {
  		  $queryParams['partOfSpeech'] = $this->apiClient->toPathValue($partOfSpeech);
  		}
  		if($includeRelated != null) {
  		  $queryParams['includeRelated'] = $this->apiClient->toPathValue($includeRelated);
  		}
  		if($sourceDictionaries != null) {
  		  $queryParams['sourceDictionaries'] = $this->apiClient->toPathValue($sourceDictionaries);
  		}
  		if($useCanonical != null) {
  		  $queryParams['useCanonical'] = $this->apiClient->toPathValue($useCanonical);
  		}
  		if($includeTags != null) {
  		  $queryParams['includeTags'] = $this->apiClient->toPathValue($includeTags);
  		}
  		if($word != null) {
  			$resourcePath = str_replace("{" . "word" . "}",
  			                            $this->apiClient->toPathValue($word), $resourcePath);
  		}
  		//make the API Call
      if (! isset($body)) {
        $body = null;
      }
  		$response = $this->apiClient->callAPI($resourcePath, $method,
  		                                      $queryParams, $body,
  		                                      $headerParams);


      if(! $response){
          return null;
        }

  		$responseObject = $this->apiClient->deserialize($response,
  		                                                'array[Definition]');
  		return $responseObject;

      }
  /**
	 * getTopExample
	 * Returns a top example for a word
   * word, string: Word to fetch examples for (required)
   * useCanonical, string: If true will try to return the correct word root ('cats' -&gt; 'cat'). If false returns exactly what was requested. (optional)
   * @return Example
	 */

   public function getTopExample($word, $useCanonical=null) {

  		//parse inputs
  		$resourcePath = "/word.{format}/{word}/topExample";
  		$resourcePath = str_replace("{format}", "json", $resourcePath);
  		$method = "GET";
      $queryParams = array();
      $headerParams = array();

      if($useCanonical != null) {
  		  $queryParams['useCanonical'] = $this->apiClient->toPathValue($useCanonical);
  		}
  		if($word != null) {
  			$resourcePath = str_replace("{" . "word" . "}",
  			                            $this->apiClient->toPathValue($word), $resourcePath);
  		}
  		//make the API Call
      if (! isset($body)) {
        $body = null;
      }
  		$response = $this->apiClient->callAPI($resourcePath, $method,
  		                                      $queryParams, $body,
  		                                      $headerParams);


      if(! $response){
          return null;
        }

  		$responseObject = $this->apiClient->deserialize($response,
  		                                                'Example');
  		return $responseObject;

      }
  /**
	 * getRelatedWords
	 * Given a word as a string, returns relationships from the Word Graph
   * word, string: Word to fetch relationships for (required)
   * relationshipTypes, string: Limits the total results per type of relationship type (optional)
   * useCanonical, string: If true will try to return the correct word root ('cats' -&gt; 'cat'). If false returns exactly what was requested. (optional)
   * limitPerRelationshipType, int: Restrict to the supplied relatinship types (optional)
   * @return array[Related]
	 */

   public function getRelatedWords($word, $relationshipTypes=null, $useCanonical=null, $limitPerRelationshipType=null) {

  		//parse inputs
  		$resourcePath = "/word.{format}/{word}/relatedWords";
  		$resourcePath = str_replace("{format}", "json", $resourcePath);
  		$method = "GET";
      $queryParams = array();
      $headerParams = array();

      if($useCanonical != null) {
  		  $queryParams['useCanonical'] = $this->apiClient->toPathValue($useCanonical);
  		}
  		if($relationshipTypes != null) {
  		  $queryParams['relationshipTypes'] = $this->apiClient->toPathValue($relationshipTypes);
  		}
  		if($limitPerRelationshipType != null) {
  		  $queryParams['limitPerRelationshipType'] = $this->apiClient->toPathValue($limitPerRelationshipType);
  		}
  		if($word != null) {
  			$resourcePath = str_replace("{" . "word" . "}",
  			                            $this->apiClient->toPathValue($word), $resourcePath);
  		}
  		//make the API Call
      if (! isset($body)) {
        $body = null;
      }
  		$response = $this->apiClient->callAPI($resourcePath, $method,
  		                                      $queryParams, $body,
  		                                      $headerParams);


      if(! $response){
          return null;
        }

  		$responseObject = $this->apiClient->deserialize($response,
  		                                                'array[Related]');
  		return $responseObject;

      }
  /**
	 * getTextPronunciations
	 * Returns text pronunciations for a given word
   * word, string: Word to get pronunciations for (required)
   * sourceDictionary, string: Get from a single dictionary (optional)
   * typeFormat, string: Text pronunciation type (optional)
   * useCanonical, string: If true will try to return a correct word root ('cats' -&gt; 'cat'). If false returns exactly what was requested. (optional)
   * limit, int: Maximum number of results to return (optional)
   * @return array[TextPron]
	 */

   public function getTextPronunciations($word, $sourceDictionary=null, $typeFormat=null, $useCanonical=null, $limit=null) {

  		//parse inputs
  		$resourcePath = "/word.{format}/{word}/pronunciations";
  		$resourcePath = str_replace("{format}", "json", $resourcePath);
  		$method = "GET";
      $queryParams = array();
      $headerParams = array();

      if($useCanonical != null) {
  		  $queryParams['useCanonical'] = $this->apiClient->toPathValue($useCanonical);
  		}
  		if($sourceDictionary != null) {
  		  $queryParams['sourceDictionary'] = $this->apiClient->toPathValue($sourceDictionary);
  		}
  		if($typeFormat != null) {
  		  $queryParams['typeFormat'] = $this->apiClient->toPathValue($typeFormat);
  		}
  		if($limit != null) {
  		  $queryParams['limit'] = $this->apiClient->toPathValue($limit);
  		}
  		if($word != null) {
  			$resourcePath = str_replace("{" . "word" . "}",
  			                            $this->apiClient->toPathValue($word), $resourcePath);
  		}
  		//make the API Call
      if (! isset($body)) {
        $body = null;
      }
  		$response = $this->apiClient->callAPI($resourcePath, $method,
  		                                      $queryParams, $body,
  		                                      $headerParams);


      if(! $response){
          return null;
        }

  		$responseObject = $this->apiClient->deserialize($response,
  		                                                'array[TextPron]');
  		return $responseObject;

      }
  /**
	 * getHyphenation
	 * Returns syllable information for a word
   * word, string: Word to get syllables for (required)
   * sourceDictionary, string: Get from a single dictionary. Valid options: ahd, century, wiktionary, webster, and wordnet. (optional)
   * useCanonical, string: If true will try to return a correct word root ('cats' -&gt; 'cat'). If false returns exactly what was requested. (optional)
   * limit, int: Maximum number of results to return (optional)
   * @return array[Syllable]
	 */

   public function getHyphenation($word, $sourceDictionary=null, $useCanonical=null, $limit=null) {

  		//parse inputs
  		$resourcePath = "/word.{format}/{word}/hyphenation";
  		$resourcePath = str_replace("{format}", "json", $resourcePath);
  		$method = "GET";
      $queryParams = array();
      $headerParams = array();

      if($useCanonical != null) {
  		  $queryParams['useCanonical'] = $this->apiClient->toPathValue($useCanonical);
  		}
  		if($sourceDictionary != null) {
  		  $queryParams['sourceDictionary'] = $this->apiClient->toPathValue($sourceDictionary);
  		}
  		if($limit != null) {
  		  $queryParams['limit'] = $this->apiClient->toPathValue($limit);
  		}
  		if($word != null) {
  			$resourcePath = str_replace("{" . "word" . "}",
  			                            $this->apiClient->toPathValue($word), $resourcePath);
  		}
  		//make the API Call
      if (! isset($body)) {
        $body = null;
      }
  		$response = $this->apiClient->callAPI($resourcePath, $method,
  		                                      $queryParams, $body,
  		                                      $headerParams);


      if(! $response){
          return null;
        }

  		$responseObject = $this->apiClient->deserialize($response,
  		                                                'array[Syllable]');
  		return $responseObject;

      }
  /**
	 * getWordFrequency
	 * Returns word usage over time
   * word, string: Word to return (required)
   * useCanonical, string: If true will try to return the correct word root ('cats' -&gt; 'cat'). If false returns exactly what was requested. (optional)
   * startYear, int: Starting Year (optional)
   * endYear, int: Ending Year (optional)
   * @return FrequencySummary
	 */

   public function getWordFrequency($word, $useCanonical=null, $startYear=null, $endYear=null) {

  		//parse inputs
  		$resourcePath = "/word.{format}/{word}/frequency";
  		$resourcePath = str_replace("{format}", "json", $resourcePath);
  		$method = "GET";
      $queryParams = array();
      $headerParams = array();

      if($useCanonical != null) {
  		  $queryParams['useCanonical'] = $this->apiClient->toPathValue($useCanonical);
  		}
  		if($startYear != null) {
  		  $queryParams['startYear'] = $this->apiClient->toPathValue($startYear);
  		}
  		if($endYear != null) {
  		  $queryParams['endYear'] = $this->apiClient->toPathValue($endYear);
  		}
  		if($word != null) {
  			$resourcePath = str_replace("{" . "word" . "}",
  			                            $this->apiClient->toPathValue($word), $resourcePath);
  		}
  		//make the API Call
      if (! isset($body)) {
        $body = null;
      }
  		$response = $this->apiClient->callAPI($resourcePath, $method,
  		                                      $queryParams, $body,
  		                                      $headerParams);


      if(! $response){
          return null;
        }

  		$responseObject = $this->apiClient->deserialize($response,
  		                                                'FrequencySummary');
  		return $responseObject;

      }
  /**
	 * getPhrases
	 * Fetches bi-gram phrases for a word
   * word, string: Word to fetch phrases for (required)
   * limit, int: Maximum number of results to return (optional)
   * wlmi, int: Minimum WLMI for the phrase (optional)
   * useCanonical, string: If true will try to return the correct word root ('cats' -&gt; 'cat'). If false returns exactly what was requested. (optional)
   * @return array[Bigram]
	 */

   public function getPhrases($word, $limit=null, $wlmi=null, $useCanonical=null) {

  		//parse inputs
  		$resourcePath = "/word.{format}/{word}/phrases";
  		$resourcePath = str_replace("{format}", "json", $resourcePath);
  		$method = "GET";
      $queryParams = array();
      $headerParams = array();

      if($limit != null) {
  		  $queryParams['limit'] = $this->apiClient->toPathValue($limit);
  		}
  		if($wlmi != null) {
  		  $queryParams['wlmi'] = $this->apiClient->toPathValue($wlmi);
  		}
  		if($useCanonical != null) {
  		  $queryParams['useCanonical'] = $this->apiClient->toPathValue($useCanonical);
  		}
  		if($word != null) {
  			$resourcePath = str_replace("{" . "word" . "}",
  			                            $this->apiClient->toPathValue($word), $resourcePath);
  		}
  		//make the API Call
      if (! isset($body)) {
        $body = null;
      }
  		$response = $this->apiClient->callAPI($resourcePath, $method,
  		                                      $queryParams, $body,
  		                                      $headerParams);


      if(! $response){
          return null;
        }

  		$responseObject = $this->apiClient->deserialize($response,
  		                                                'array[Bigram]');
  		return $responseObject;

      }
  /**
	 * getEtymologies
	 * Fetches etymology data
   * word, string: Word to return (required)
   * useCanonical, string: If true will try to return the correct word root ('cats' -&gt; 'cat'). If false returns exactly what was requested. (optional)
   * @return array[string]
	 */

   public function getEtymologies($word, $useCanonical=null) {

  		//parse inputs
  		$resourcePath = "/word.{format}/{word}/etymologies";
  		$resourcePath = str_replace("{format}", "json", $resourcePath);
  		$method = "GET";
      $queryParams = array();
      $headerParams = array();

      if($useCanonical != null) {
  		  $queryParams['useCanonical'] = $this->apiClient->toPathValue($useCanonical);
  		}
  		if($word != null) {
  			$resourcePath = str_replace("{" . "word" . "}",
  			                            $this->apiClient->toPathValue($word), $resourcePath);
  		}
  		//make the API Call
      if (! isset($body)) {
        $body = null;
      }
  		$response = $this->apiClient->callAPI($resourcePath, $method,
  		                                      $queryParams, $body,
  		                                      $headerParams);


      if(! $response){
          return null;
        }

  		$responseObject = $this->apiClient->deserialize($response,
  		                                                'array[string]');
  		return $responseObject;

      }
  /**
	 * getAudio
	 * Fetches audio metadata for a word.
   * word, string: Word to get audio for. (required)
   * useCanonical, string: Use the canonical form of the word (optional)
   * limit, int: Maximum number of results to return (optional)
   * @return array[AudioFile]
	 */

   public function getAudio($word, $useCanonical=null, $limit=null) {

  		//parse inputs
  		$resourcePath = "/word.{format}/{word}/audio";
  		$resourcePath = str_replace("{format}", "json", $resourcePath);
  		$method = "GET";
      $queryParams = array();
      $headerParams = array();

      if($useCanonical != null) {
  		  $queryParams['useCanonical'] = $this->apiClient->toPathValue($useCanonical);
  		}
  		if($limit != null) {
  		  $queryParams['limit'] = $this->apiClient->toPathValue($limit);
  		}
  		if($word != null) {
  			$resourcePath = str_replace("{" . "word" . "}",
  			                            $this->apiClient->toPathValue($word), $resourcePath);
  		}
  		//make the API Call
      if (! isset($body)) {
        $body = null;
      }
  		$response = $this->apiClient->callAPI($resourcePath, $method,
  		                                      $queryParams, $body,
  		                                      $headerParams);


      if(! $response){
          return null;
        }

  		$responseObject = $this->apiClient->deserialize($response,
  		                                                'array[AudioFile]');
  		return $responseObject;

      }
  /**
	 * getScrabbleScore
	 * Returns the Scrabble score for a word
   * word, string: Word to get scrabble score for. (required)
   * @return ScrabbleScoreResult
	 */

   public function getScrabbleScore($word) {

  		//parse inputs
  		$resourcePath = "/word.{format}/{word}/scrabbleScore";
  		$resourcePath = str_replace("{format}", "json", $resourcePath);
  		$method = "GET";
      $queryParams = array();
      $headerParams = array();

      if($word != null) {
  			$resourcePath = str_replace("{" . "word" . "}",
  			                            $this->apiClient->toPathValue($word), $resourcePath);
  		}
  		//make the API Call
      if (! isset($body)) {
        $body = null;
      }
  		$response = $this->apiClient->callAPI($resourcePath, $method,
  		                                      $queryParams, $body,
  		                                      $headerParams);


      if(! $response){
          return null;
        }

  		$responseObject = $this->apiClient->deserialize($response,
  		                                                'ScrabbleScoreResult');
  		return $responseObject;

      }
  
}
