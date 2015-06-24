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

namespace jwa\cryptographic_algorithms\content_encryption\AES_CBC_HS\sha2;

use jwa\cryptographic_algorithms\content_encryption\AES_CBC_HS\AESCBCHS_Algorithm;
use jwa\JSONWebSignatureAndEncryptionAlgorithms;

/**
 * Class A192CBCHS384_Algorithm
 * @package jwa\cryptographic_algorithms\content_encryption\AES_CBC_HS\sha2
 */
final class A192CBCHS384_Algorithm extends AESCBCHS_Algorithm {

    /**
     * @return string
     */
    public function getHashingAlgorithm()
    {
        return 'sha384';
    }

    /**
     * @return string
     */
    public function getName()
    {
        JSONWebSignatureAndEncryptionAlgorithms::A192CBC_HS384;
    }

    /**
     * @return int
     */
    public function getMinKeyLen()
    {
        return 384;
    }
}