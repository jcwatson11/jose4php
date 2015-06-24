<?php
/**
 * Copyright 2015 OpenStack Foundation
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 * http://www.apache.org/licenses/LICENSE-2.0
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 **/

namespace jwk\impl;

use jwa\JSONWebSignatureAndEncryptionAlgorithms;
use jwk\exceptions\InvalidJWKAlgorithm;
use jwk\JSONWebKeyPublicKeyUseValues;
use jwk\OctetSequenceKeysParameters;

/**
 * Class OctetSequenceJWKSpecification
 * @package jwk\impl
 */
final class OctetSequenceJWKSpecification
    extends JWKSpecification {

    /**
     *
     * @param string $alg
     * @param string $use
     * @throws InvalidJWKAlgorithm
     */
    public function __construct($alg = JSONWebSignatureAndEncryptionAlgorithms::HS256, $use = JSONWebKeyPublicKeyUseValues::Signature){
        if(!in_array($alg, OctetSequenceKeysParameters::$valid_algorithms_values))
            throw new InvalidJWKAlgorithm(sprintf('alg %s', $alg));
        parent::__construct($alg, $use);
    }
}