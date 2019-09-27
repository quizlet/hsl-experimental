<?hh // strict
/*
 *  Copyright (c) 2004-present, Facebook, Inc.
 *  All rights reserved.
 *
 *  This source code is licensed under the MIT license found in the
 *  LICENSE file in the root directory of this source tree.
 *
 */

namespace HH\Lib\Experimental\Filesystem;

/* HH_FIXME[4194] disposable extending non-disposable interface */
interface DisposableFileReadHandle extends \IAsyncDisposable, FileReadHandle {
}