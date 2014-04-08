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
      <li><a href="modules.php"><span>Modules</span></a></li>
      <li class="current"><a href="annotated.php"><span>Data&nbsp;Structures</span></a></li>
      <li><a href="files.php"><span>Files</span></a></li>
    </ul>
  </div>
  <div class="tabs">
    <ul>
      <li><a href="annotated.php"><span>Data&nbsp;Structures</span></a></li>
      <li><a href="functions.php"><span>Data&nbsp;Fields</span></a></li>
    </ul>
  </div>
</div>
<div class="contents">
<h1>hwloc_obj_attr_u Union Reference<br/>
<small>
[<a class="el" href="group__hwlocality__objects.php">Topology Objects</a>]</small>
</h1><!-- doxytag: class="hwloc_obj_attr_u" -->
<p>Object type-specific Attributes.  
<a href="#_details">More...</a></p>

<p><code>#include &lt;<a class="el" href="hwloc_8h_source.php">hwloc.h</a>&gt;</code></p>
<table border="0" cellpadding="0" cellspacing="0">
<tr><td colspan="2"><h2>Data Structures</h2></td></tr>
<tr><td class="memItemLeft" align="right" valign="top">struct &nbsp;</td><td class="memItemRight" valign="bottom"><a class="el" href="structhwloc__obj__attr__u_1_1hwloc__cache__attr__s.php">hwloc_cache_attr_s</a></td></tr>
<tr><td class="mdescLeft">&nbsp;</td><td class="mdescRight">Cache-specific Object Attributes.  <a href="structhwloc__obj__attr__u_1_1hwloc__cache__attr__s.php#_details">More...</a><br/></td></tr>
<tr><td class="memItemLeft" align="right" valign="top">struct &nbsp;</td><td class="memItemRight" valign="bottom"><a class="el" href="structhwloc__obj__attr__u_1_1hwloc__machine__attr__s.php">hwloc_machine_attr_s</a></td></tr>
<tr><td class="mdescLeft">&nbsp;</td><td class="mdescRight">Machine-specific Object Attributes.  <a href="structhwloc__obj__attr__u_1_1hwloc__machine__attr__s.php#_details">More...</a><br/></td></tr>
<tr><td class="memItemLeft" align="right" valign="top">struct &nbsp;</td><td class="memItemRight" valign="bottom"><a class="el" href="structhwloc__obj__attr__u_1_1hwloc__memory__attr__s.php">hwloc_memory_attr_s</a></td></tr>
<tr><td class="mdescLeft">&nbsp;</td><td class="mdescRight">Node-specific Object Attributes.  <a href="structhwloc__obj__attr__u_1_1hwloc__memory__attr__s.php#_details">More...</a><br/></td></tr>
<tr><td class="memItemLeft" align="right" valign="top">struct &nbsp;</td><td class="memItemRight" valign="bottom"><a class="el" href="structhwloc__obj__attr__u_1_1hwloc__misc__attr__s.php">hwloc_misc_attr_s</a></td></tr>
<tr><td class="mdescLeft">&nbsp;</td><td class="mdescRight">Misc-specific Object Attributes.  <a href="structhwloc__obj__attr__u_1_1hwloc__misc__attr__s.php#_details">More...</a><br/></td></tr>
<tr><td colspan="2"><h2>Data Fields</h2></td></tr>
<tr><td class="memItemLeft" align="right" valign="top">struct <br class="typebreak"/>
<a class="el" href="structhwloc__obj__attr__u_1_1hwloc__cache__attr__s.php">hwloc_obj_attr_u::hwloc_cache_attr_s</a>&nbsp;</td><td class="memItemRight" valign="bottom"><a class="el" href="unionhwloc__obj__attr__u.php#ab5a8ae3bf490e6b1071fea53f7382836">cache</a></td></tr>
<tr><td class="mdescLeft">&nbsp;</td><td class="mdescRight">Cache-specific Object Attributes.  <a href="#ab5a8ae3bf490e6b1071fea53f7382836"></a><br/></td></tr>
<tr><td class="memItemLeft" align="right" valign="top">struct <br class="typebreak"/>
<a class="el" href="structhwloc__obj__attr__u_1_1hwloc__memory__attr__s.php">hwloc_obj_attr_u::hwloc_memory_attr_s</a>&nbsp;</td><td class="memItemRight" valign="bottom"><a class="el" href="unionhwloc__obj__attr__u.php#a941994ad83275213249f8adfd8204465">node</a></td></tr>
<tr><td class="mdescLeft">&nbsp;</td><td class="mdescRight">Node-specific Object Attributes.  <a href="#a941994ad83275213249f8adfd8204465"></a><br/></td></tr>
<tr><td class="memItemLeft" align="right" valign="top">struct <br class="typebreak"/>
<a class="el" href="structhwloc__obj__attr__u_1_1hwloc__machine__attr__s.php">hwloc_obj_attr_u::hwloc_machine_attr_s</a>&nbsp;</td><td class="memItemRight" valign="bottom"><a class="el" href="unionhwloc__obj__attr__u.php#a5b42966df7c5bfdc36891e414cc31607">machine</a></td></tr>
<tr><td class="mdescLeft">&nbsp;</td><td class="mdescRight">Machine-specific Object Attributes.  <a href="#a5b42966df7c5bfdc36891e414cc31607"></a><br/></td></tr>
<tr><td class="memItemLeft" align="right" valign="top">struct <a class="el" href="structhwloc__obj__attr__u_1_1hwloc__machine__attr__s.php">hwloc_machine_attr_s</a>&nbsp;</td><td class="memItemRight" valign="bottom"><a class="el" href="unionhwloc__obj__attr__u.php#aa65b98d3eada000628dc66668e4954df">system</a></td></tr>
<tr><td class="mdescLeft">&nbsp;</td><td class="mdescRight">System-specific Object Attributes.  <a href="#aa65b98d3eada000628dc66668e4954df"></a><br/></td></tr>
<tr><td class="memItemLeft" align="right" valign="top">struct <br class="typebreak"/>
<a class="el" href="structhwloc__obj__attr__u_1_1hwloc__misc__attr__s.php">hwloc_obj_attr_u::hwloc_misc_attr_s</a>&nbsp;</td><td class="memItemRight" valign="bottom"><a class="el" href="unionhwloc__obj__attr__u.php#a33b7e687b61be1b62e22f4037788582c">misc</a></td></tr>
<tr><td class="mdescLeft">&nbsp;</td><td class="mdescRight">Misc-specific Object Attributes.  <a href="#a33b7e687b61be1b62e22f4037788582c"></a><br/></td></tr>
</table>
<hr/><a name="_details"></a><h2>Detailed Description</h2>
<p>Object type-specific Attributes. </p>
<hr/><h2>Field Documentation</h2>
<a class="anchor" id="ab5a8ae3bf490e6b1071fea53f7382836"></a><!-- doxytag: member="hwloc_obj_attr_u::cache" ref="ab5a8ae3bf490e6b1071fea53f7382836" args="" -->
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">struct <a class="el" href="structhwloc__obj__attr__u_1_1hwloc__cache__attr__s.php">hwloc_obj_attr_u::hwloc_cache_attr_s</a>  <a class="el" href="unionhwloc__obj__attr__u.php#ab5a8ae3bf490e6b1071fea53f7382836">hwloc_obj_attr_u::cache</a></td>
        </tr>
      </table>
</div>
<div class="memdoc">

<p>Cache-specific Object Attributes. </p>

</div>
</div>
<a class="anchor" id="a5b42966df7c5bfdc36891e414cc31607"></a><!-- doxytag: member="hwloc_obj_attr_u::machine" ref="a5b42966df7c5bfdc36891e414cc31607" args="" -->
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">struct <a class="el" href="structhwloc__obj__attr__u_1_1hwloc__machine__attr__s.php">hwloc_obj_attr_u::hwloc_machine_attr_s</a>  <a class="el" href="unionhwloc__obj__attr__u.php#a5b42966df7c5bfdc36891e414cc31607">hwloc_obj_attr_u::machine</a></td>
        </tr>
      </table>
</div>
<div class="memdoc">

<p>Machine-specific Object Attributes. </p>

</div>
</div>
<a class="anchor" id="a33b7e687b61be1b62e22f4037788582c"></a><!-- doxytag: member="hwloc_obj_attr_u::misc" ref="a33b7e687b61be1b62e22f4037788582c" args="" -->
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">struct <a class="el" href="structhwloc__obj__attr__u_1_1hwloc__misc__attr__s.php">hwloc_obj_attr_u::hwloc_misc_attr_s</a>  <a class="el" href="unionhwloc__obj__attr__u.php#a33b7e687b61be1b62e22f4037788582c">hwloc_obj_attr_u::misc</a></td>
        </tr>
      </table>
</div>
<div class="memdoc">

<p>Misc-specific Object Attributes. </p>

</div>
</div>
<a class="anchor" id="a941994ad83275213249f8adfd8204465"></a><!-- doxytag: member="hwloc_obj_attr_u::node" ref="a941994ad83275213249f8adfd8204465" args="" -->
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">struct <a class="el" href="structhwloc__obj__attr__u_1_1hwloc__memory__attr__s.php">hwloc_obj_attr_u::hwloc_memory_attr_s</a>  <a class="el" href="unionhwloc__obj__attr__u.php#a941994ad83275213249f8adfd8204465">hwloc_obj_attr_u::node</a></td>
        </tr>
      </table>
</div>
<div class="memdoc">

<p>Node-specific Object Attributes. </p>

</div>
</div>
<a class="anchor" id="aa65b98d3eada000628dc66668e4954df"></a><!-- doxytag: member="hwloc_obj_attr_u::system" ref="aa65b98d3eada000628dc66668e4954df" args="" -->
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">struct <a class="el" href="structhwloc__obj__attr__u_1_1hwloc__machine__attr__s.php">hwloc_machine_attr_s</a> <a class="el" href="unionhwloc__obj__attr__u.php#aa65b98d3eada000628dc66668e4954df">hwloc_obj_attr_u::system</a><code> [read]</code></td>
        </tr>
      </table>
</div>
<div class="memdoc">

<p>System-specific Object Attributes. </p>

</div>
</div>
<hr/>The documentation for this union was generated from the following file:<ul>
<li><a class="el" href="hwloc_8h_source.php">hwloc.h</a></li>
</ul>
</div>
<?php
include_once("$topdir/includes/footer.inc");