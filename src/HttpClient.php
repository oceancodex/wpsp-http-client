<?php

namespace WPSPCORE\HttpClient;

class HttpClient {

	public static function create(array $defaultOptions = [], int $maxHostConnections = 6, int $maxPendingPushes = 50): \Symfony\Contracts\HttpClient\HttpClientInterface {
		return \Symfony\Component\HttpClient\HttpClient::create($defaultOptions, $maxHostConnections, $maxPendingPushes);
	}

	public static function createForBaseUri(string $baseUri, array $defaultOptions = [], int $maxHostConnections = 6, int $maxPendingPushes = 50): \Symfony\Contracts\HttpClient\HttpClientInterface {
		return \Symfony\Component\HttpClient\HttpClient::createForBaseUri($baseUri, $defaultOptions, $maxHostConnections, $maxPendingPushes);
	}

}