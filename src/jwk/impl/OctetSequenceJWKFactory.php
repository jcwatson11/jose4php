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

use jwa\cryptographic_algorithms\DigitalSignatures_MACs_Registry;
use jwk\exceptions\InvalidJWKAlgorithm;
use jwk\IJWKSpecification;
use jwk\JSONWebKeyTypes;
use security\SymmetricSharedKey;
use utils\ByteUtil;
use \jwk\IJWK;

/**
 * Class OctetSequenceJWKFactory
 * @package jwk\impl
 */
final class OctetSequenceJWKFactory {

    /**
     * @param IJWKSpecification $spec
     * @return IJWK
     * @throws InvalidJWKAlgorithm
     */
    static public function build(IJWKSpecification $spec){

        if(is_null($spec)) throw new \InvalidArgumentException('missing spec param');

        $algorithm = DigitalSignatures_MACs_Registry::getInstance()->get($spec->getAlg());

        if(is_null($algorithm)) throw new InvalidJWKAlgorithm(sprintf('alg %s not supported!',$spec->getAlg()));
        if($algorithm->getKeyType() !== JSONWebKeyTypes::OctetSequence) throw new InvalidJWKAlgorithm(sprintf('key type %s not supported!', $algorithm->getKeyType()));

        $bytes = ByteUtil::randomBytes($algorithm->getMinKeyLen());
        return OctetSequenceJWK::fromSecret(new SymmetricSharedKey($bytes), $spec->getAlg(), $spec->getUse());
    }

}