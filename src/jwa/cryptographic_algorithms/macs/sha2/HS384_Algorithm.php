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

namespace jwa\cryptographic_algorithms\macs\sha2;


use jwa\cryptographic_algorithms\macs\HSMAC_Algorithm;
use jwa\JSONWebSignatureAndEncryptionAlgorithms;

/**
 * Class HS384_Algorithm
 * @package jwa\cryptographic_algorithms\macs\sha2
 */
final class HS384_Algorithm extends HSMAC_Algorithm {

    /**
     * @return int
     */
    public function getMinKeyLen()
    {
        return 384;
    }

    public function getHashingAlgorithm()
    {
        return 'sha384';
    }

    /**
     * @return string
     */
    public function getName()
    {
        return JSONWebSignatureAndEncryptionAlgorithms::HS384;
    }
}