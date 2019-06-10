<?php

namespace InnerServe\PostfixAPI\Service;
use Symfony\Component\HttpFoundation\JsonResponse;

class JsonResponseService {
	public function ok($data) {
		$response = new JsonResponse();
		return$response->setData(array('success' => true, 'error' => null, 'data' => $data));
	}

	public function error($error, $data = null) {
		$response = new JsonResponse();
		return$response->setData(array('success' => false, 'error' => $error, 'data' => $data));
	}
}