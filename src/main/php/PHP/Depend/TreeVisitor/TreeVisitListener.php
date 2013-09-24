<?php
/**
 * This file is part of PDepend.
 *
 * PHP Version 5
 *
 * Copyright (c) 2008-2013, Manuel Pichler <mapi@pdepend.org>.
 * All rights reserved.
 *
 * Redistribution and use in source and binary forms, with or without
 * modification, are permitted provided that the following conditions
 * are met:
 *
 *   * Redistributions of source code must retain the above copyright
 *     notice, this list of conditions and the following disclaimer.
 *
 *   * Redistributions in binary form must reproduce the above copyright
 *     notice, this list of conditions and the following disclaimer in
 *     the documentation and/or other materials provided with the
 *     distribution.
 *
 *   * Neither the name of Manuel Pichler nor the names of his
 *     contributors may be used to endorse or promote products derived
 *     from this software without specific prior written permission.
 *
 * THIS SOFTWARE IS PROVIDED BY THE COPYRIGHT HOLDERS AND CONTRIBUTORS
 * "AS IS" AND ANY EXPRESS OR IMPLIED WARRANTIES, INCLUDING, BUT NOT
 * LIMITED TO, THE IMPLIED WARRANTIES OF MERCHANTABILITY AND FITNESS
 * FOR A PARTICULAR PURPOSE ARE DISCLAIMED. IN NO EVENT SHALL THE
 * COPYRIGHT OWNER OR CONTRIBUTORS BE LIABLE FOR ANY DIRECT, INDIRECT,
 * INCIDENTAL, SPECIAL, EXEMPLARY, OR CONSEQUENTIAL DAMAGES (INCLUDING,
 * BUT NOT LIMITED TO, PROCUREMENT OF SUBSTITUTE GOODS OR SERVICES;
 * LOSS OF USE, DATA, OR PROFITS; OR BUSINESS INTERRUPTION) HOWEVER
 * CAUSED AND ON ANY THEORY OF LIABILITY, WHETHER IN CONTRACT, STRICT
 * LIABILITY, OR TORT (INCLUDING NEGLIGENCE OR OTHERWISE) ARISING IN
 * ANY WAY OUT OF THE USE OF THIS SOFTWARE, EVEN IF ADVISED OF THE
 * POSSIBILITY OF SUCH DAMAGE.
 *
 * @copyright 2008-2013 Manuel Pichler. All rights reserved.
 * @license   http://www.opensource.org/licenses/bsd-license.php  BSD License
 */

namespace PHP\Depend\TreeVisitor;

use PHP\Depend\Source\AST\ASTClass;
use PHP\Depend\Source\AST\ASTCompilationUnit;
use PHP\Depend\Source\AST\ASTFunction;
use PHP\Depend\Source\AST\ASTInterface;
use PHP\Depend\Source\AST\ASTMethod;
use PHP\Depend\Source\AST\ASTNamespace;
use PHP\Depend\Source\AST\ASTTrait;

/**
 * Base interface for a visitor listener.
 *
 * @copyright 2008-2013 Manuel Pichler. All rights reserved.
 * @license   http://www.opensource.org/licenses/bsd-license.php  BSD License
 */
interface TreeVisitListener
{
    /**
     * Is called when the visitor starts a new class instance.
     *
     * @param \PHP\Depend\Source\AST\ASTClass $class The context class instance.
     * @return void
     */
    function startVisitClass(ASTClass $class);

    /**
     * Is called when the visitor ends with a class instance.
     *
     * @param \PHP\Depend\Source\AST\ASTClass $class The context class instance.
     * @return void
     */
    function endVisitClass(ASTClass $class);

    /**
     * Is called when the visitor starts a new trait instance.
     *
     * @param \PHP\Depend\Source\AST\ASTTrait $trait
     * @return void
     * @since 1.0.0
     */
    function startVisitTrait(ASTTrait $trait);

    /**
     * Is called when the visitor ends with a trait instance.
     *
     * @param \PHP\Depend\Source\AST\ASTTrait $trait
     * @return void
     * @since 1.0.0
     */
    function endVisitTrait(ASTTrait $trait);

    /**
     * Is called when the visitor starts a new file instance.
     *
     * @param \PHP\Depend\Source\AST\ASTCompilationUnit $compilationUnit The context file instance.
     * @return void
     */
    function startVisitFile(ASTCompilationUnit $compilationUnit);

    /**
     * Is called when the visitor ends with a file instance.
     *
     * @param \PHP\Depend\Source\AST\ASTCompilationUnit $compilationUnit The context file instance.
     * @return void
     */
    function endVisitFile(ASTCompilationUnit $compilationUnit);

    /**
     * Is called when the visitor starts a new function instance.
     *
     * @param \PHP\Depend\Source\AST\ASTFunction $function
     * @return void
     */
    function startVisitFunction(ASTFunction $function);

    /**
     * Is called when the visitor ends with a function instance.
     *
     * @param ASTFunction $function
     * @return void
     */
    function endVisitFunction(ASTFunction $function);

    /**
     * Is called when the visitor starts a new interface instance.
     *
     * @param \PHP\Depend\Source\AST\ASTInterface $interface
     * @return void
     */
    function startVisitInterface(ASTInterface $interface);

    /**
     * Is called when the visitor ends with an interface instance.
     *
     * @param \PHP\Depend\Source\AST\ASTInterface $interface
     * @return void
     */
    function endVisitInterface(ASTInterface $interface);

    /**
     * Is called when the visitor starts a new method instance.
     *
     * @param \PHP\Depend\Source\AST\ASTMethod $method
     * @return void
     */
    function startVisitMethod(ASTMethod $method);

    /**
     * Is called when the visitor ends with a method instance.
     *
     * @param \PHP\Depend\Source\AST\ASTMethod $method
     * @return void
     */
    function endVisitMethod(ASTMethod $method);

    /**
     * Is called when the visitor starts a new package instance.
     *
     * @param \PHP\Depend\Source\AST\ASTNamespace $namespace
     * @return void
     */
    function startVisitPackage(ASTNamespace $namespace);

    /**
     * Is called when the visitor ends with a package instance.
     *
     * @param \PHP\Depend\Source\AST\ASTNamespace $namespace
     * @return void
     */
    function endVisitPackage(ASTNamespace $namespace);

    /**
     * Is called when the visitor starts a new parameter instance.
     *
     * @param \PHP_Depend_Code_Parameter $parameter The context parameter instance.
     * @return void
     */
    function startVisitParameter(\PHP_Depend_Code_Parameter $parameter);

    /**
     * Is called when the visitor ends with a parameter instance.
     *
     * @param \PHP_Depend_Code_Parameter $parameter The context parameter instance.
     * @return void
     */
    function endVisitParameter(\PHP_Depend_Code_Parameter $parameter);

    /**
     * Is called when the visitor starts a new property instance.
     *
     * @param \PHP_Depend_Code_Property $property The context property instance.
     * @return void
     */
    function startVisitProperty(\PHP_Depend_Code_Property $property);

    /**
     * Is called when the visitor ends with a property instance.
     *
     * @param \PHP_Depend_Code_Property $property The context property instance.
     * @return void
     */
    function endVisitProperty(\PHP_Depend_Code_Property $property);
}