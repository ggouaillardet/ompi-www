<?php
$topdir = "../../../..";
# Note that we must use the PHP "$$" indirection to assign to the
# "title" variable, because if we list "$ title" (without the space)
# in this file, Doxygen will replace it with a string title.
$ver = basename(getcwd());
$thwarting_doxygen_preprocessor = "title";
$$thwarting_doxygen_preprocessor = "Portable Hardware Locality (hwloc) Documentation: $ver";
$header_include_file = "$topdir/projects/hwloc/doc/$ver/www.open-mpi.org-css.inc";

include_once("$topdir/projects/hwloc/nav.inc");
include_once("$topdir/includes/header.inc");
include_once("$topdir/includes/code.inc");
?>
<!-- Generated by Doxygen 1.6.1 -->
<div class="navigation" id="top">
  <div class="tabs">
    <ul>
      <li><a href="index.php"><span>Main&nbsp;Page</span></a></li>
      <li class="current"><a href="pages.php"><span>Related&nbsp;Pages</span></a></li>
      <li><a href="modules.php"><span>Modules</span></a></li>
      <li><a href="annotated.php"><span>Data&nbsp;Structures</span></a></li>
      <li><a href="files.php"><span>Files</span></a></li>
    </ul>
  </div>
</div>
<div class="contents">


<h1><a class="anchor" id="glossary">Glossary </a></h1><dl>
<dt>Object </dt>
<dd><p class="startdd">Interesting kind of part of the system, such as a Core, a Cache, a Memory node, etc. The different types detected by hwloc are detailed in the hwloc_obj_type_e enumeration.</p>
<p>They are topologically sorted by CPU set into a tree whose root is the System object which always exists. </p>
<p class="enddd"></p>
</dd>
<dt>CPU set </dt>
<dd><p class="startdd">The set of logical processors logically included in an object, if any</p>
<p class="enddd"></p>
</dd>
<dt>Father object </dt>
<dd><p class="startdd">The object logically containing the current object, for instance because its CPU set includes the CPU set of the current object. </p>
<p class="enddd"></p>
</dd>
<dt>Children objects </dt>
<dd><p class="startdd">The object contained in the current object because their CPU set is included in the CPU set of the current object.</p>
<p class="enddd"></p>
</dd>
<dt>Arity </dt>
<dd><p class="startdd">The number of children of an object</p>
<p class="enddd"></p>
</dd>
<dt>Sibling objects </dt>
<dd><p class="startdd">Objects of the same type which have the same father</p>
<p class="enddd"></p>
</dd>
<dt>Sibling rank </dt>
<dd><p class="startdd">Index to uniquely identify objecst of the same type which have the same father, numbered from 0 to the arity of the father minus one.</p>
<p class="enddd"></p>
</dd>
<dt>Cousin objects </dt>
<dd><p class="startdd">Objects of the same type as the current object</p>
<p class="enddd"></p>
</dd>
<dt>Level </dt>
<dd><p class="startdd">Set of objects of the same type</p>
<p class="enddd"></p>
</dd>
<dt>OS index </dt>
<dd><p class="startdd">The index that the OS uses to identify the object. This may sometimes be completely arbitrary or depend on the BIOS configuration.</p>
<p class="enddd"></p>
</dd>
<dt>Depth </dt>
<dd><p class="startdd">Nesting level in the object tree, starting from the System object.</p>
<p class="enddd"></p>
</dd>
<dt>Logical index </dt>
<dd><p class="startdd">Index to uniquely identify objects of the same type. This index is always linear from 0 to the number of objects of the level for that type, to express proximity. It could also be called cousin rank.</p>
<p class="enddd"></p>
</dd>
</dl>
<p>The following diagram can help to understand the vocabulary of the relationships by showing the example of a machine with two dual core non-SMT sockets, thus a topology with 4 levels.</p>
<div align="center">
<img src="diagram.png" alt="diagram.png"/>
</div>
 <p>It should be noted that for Processor objects, the logical index, computed linearly by hwloc, is not the same as the OS index. </p>
</div>
<?php
include_once("$topdir/includes/footer.inc");