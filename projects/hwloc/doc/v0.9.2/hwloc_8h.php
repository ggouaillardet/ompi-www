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
      <li><a href="pages.php"><span>Related&nbsp;Pages</span></a></li>
      <li><a href="modules.php"><span>Modules</span></a></li>
      <li><a href="annotated.php"><span>Data&nbsp;Structures</span></a></li>
      <li class="current"><a href="files.php"><span>Files</span></a></li>
    </ul>
  </div>
  <div class="tabs">
    <ul>
      <li><a href="files.php"><span>File&nbsp;List</span></a></li>
      <li><a href="globals.php"><span>Globals</span></a></li>
    </ul>
  </div>
</div>
<div class="contents">
<h1>hwloc.h File Reference</h1>
<p>The hwloc API.  
<a href="#_details">More...</a></p>
<code>#include &lt;sys/types.h&gt;</code><br/>
<code>#include &lt;stdio.h&gt;</code><br/>
<code>#include &lt;limits.h&gt;</code><br/>
<code>#include &lt;<a class="el" href="cpuset_8h_source.php">hwloc/cpuset.h</a>&gt;</code><br/>
<code>#include &lt;<a class="el" href="helper_8h_source.php">hwloc/helper.h</a>&gt;</code><br/>

<p><a href="hwloc_8h_source.php">Go to the source code of this file.</a></p>
<table border="0" cellpadding="0" cellspacing="0">
<tr><td colspan="2"><h2>Data Structures</h2></td></tr>
<tr><td class="memItemLeft" align="right" valign="top">struct &nbsp;</td><td class="memItemRight" valign="bottom"><a class="el" href="structhwloc__obj.php">hwloc_obj</a></td></tr>
<tr><td class="mdescLeft">&nbsp;</td><td class="mdescRight">Structure of a topology object.  <a href="structhwloc__obj.php#_details">More...</a><br/></td></tr>
<tr><td class="memItemLeft" align="right" valign="top">union &nbsp;</td><td class="memItemRight" valign="bottom"><a class="el" href="unionhwloc__obj__attr__u.php">hwloc_obj_attr_u</a></td></tr>
<tr><td class="mdescLeft">&nbsp;</td><td class="mdescRight">Object type-specific Attributes.  <a href="unionhwloc__obj__attr__u.php#_details">More...</a><br/></td></tr>
<tr><td class="memItemLeft" align="right" valign="top">struct &nbsp;</td><td class="memItemRight" valign="bottom"><a class="el" href="structhwloc__obj__attr__u_1_1hwloc__cache__attr__s.php">hwloc_obj_attr_u::hwloc_cache_attr_s</a></td></tr>
<tr><td class="mdescLeft">&nbsp;</td><td class="mdescRight">Cache-specific Object Attributes.  <a href="structhwloc__obj__attr__u_1_1hwloc__cache__attr__s.php#_details">More...</a><br/></td></tr>
<tr><td class="memItemLeft" align="right" valign="top">struct &nbsp;</td><td class="memItemRight" valign="bottom"><a class="el" href="structhwloc__obj__attr__u_1_1hwloc__memory__attr__s.php">hwloc_obj_attr_u::hwloc_memory_attr_s</a></td></tr>
<tr><td class="mdescLeft">&nbsp;</td><td class="mdescRight">Node-specific Object Attributes.  <a href="structhwloc__obj__attr__u_1_1hwloc__memory__attr__s.php#_details">More...</a><br/></td></tr>
<tr><td class="memItemLeft" align="right" valign="top">struct &nbsp;</td><td class="memItemRight" valign="bottom"><a class="el" href="structhwloc__obj__attr__u_1_1hwloc__machine__attr__s.php">hwloc_obj_attr_u::hwloc_machine_attr_s</a></td></tr>
<tr><td class="mdescLeft">&nbsp;</td><td class="mdescRight">Machine-specific Object Attributes.  <a href="structhwloc__obj__attr__u_1_1hwloc__machine__attr__s.php#_details">More...</a><br/></td></tr>
<tr><td class="memItemLeft" align="right" valign="top">struct &nbsp;</td><td class="memItemRight" valign="bottom"><a class="el" href="structhwloc__obj__attr__u_1_1hwloc__misc__attr__s.php">hwloc_obj_attr_u::hwloc_misc_attr_s</a></td></tr>
<tr><td class="mdescLeft">&nbsp;</td><td class="mdescRight">Misc-specific Object Attributes.  <a href="structhwloc__obj__attr__u_1_1hwloc__misc__attr__s.php#_details">More...</a><br/></td></tr>
<tr><td colspan="2"><h2>Defines</h2></td></tr>
<tr><td class="memItemLeft" align="right" valign="top">#define&nbsp;</td><td class="memItemRight" valign="bottom"><a class="el" href="group__hwlocality__types.php#ga3b6e4128e9fe773863b123fa6e4a080b">HWLOC_TYPE_UNORDERED</a>&nbsp;&nbsp;&nbsp;INT_MAX</td></tr>
<tr><td class="mdescLeft">&nbsp;</td><td class="mdescRight">Value returned by hwloc_compare_types when types can not be compared.  <a href="group__hwlocality__types.php#ga3b6e4128e9fe773863b123fa6e4a080b"></a><br/></td></tr>
<tr><td class="memItemLeft" align="right" valign="top">#define&nbsp;</td><td class="memItemRight" valign="bottom"><a class="el" href="group__hwlocality__information.php#ga9e86ce528f626330de2da7adb6c4e02e">HWLOC_TYPE_DEPTH_UNKNOWN</a>&nbsp;&nbsp;&nbsp;-1</td></tr>
<tr><td class="mdescLeft">&nbsp;</td><td class="mdescRight">No object of given type exists in the topology.  <a href="group__hwlocality__information.php#ga9e86ce528f626330de2da7adb6c4e02e"></a><br/></td></tr>
<tr><td class="memItemLeft" align="right" valign="top">#define&nbsp;</td><td class="memItemRight" valign="bottom"><a class="el" href="group__hwlocality__information.php#ga64c80d3e0501b321d217b1642d68e23d">HWLOC_TYPE_DEPTH_MULTIPLE</a>&nbsp;&nbsp;&nbsp;-2</td></tr>
<tr><td class="mdescLeft">&nbsp;</td><td class="mdescRight">Objects of given type exist at different depth in the topology.  <a href="group__hwlocality__information.php#ga64c80d3e0501b321d217b1642d68e23d"></a><br/></td></tr>
<tr><td colspan="2"><h2>Typedefs</h2></td></tr>
<tr><td class="memItemLeft" align="right" valign="top">typedef struct hwloc_topology *&nbsp;</td><td class="memItemRight" valign="bottom"><a class="el" href="group__hwlocality__topology.php#ga9d1e76ee15a7dee158b786c30b6a6e38">hwloc_topology_t</a></td></tr>
<tr><td class="mdescLeft">&nbsp;</td><td class="mdescRight">Topology context.  <a href="group__hwlocality__topology.php#ga9d1e76ee15a7dee158b786c30b6a6e38"></a><br/></td></tr>
<tr><td class="memItemLeft" align="right" valign="top">typedef struct <a class="el" href="structhwloc__obj.php">hwloc_obj</a> *&nbsp;</td><td class="memItemRight" valign="bottom"><a class="el" href="group__hwlocality__objects.php#ga79b8ab56877ef99ac59b833203391c7d">hwloc_obj_t</a></td></tr>
<tr><td colspan="2"><h2>Enumerations</h2></td></tr>
<tr><td class="memItemLeft" align="right" valign="top">enum &nbsp;</td><td class="memItemRight" valign="bottom"><a class="el" href="group__hwlocality__types.php#gacd37bb612667dc437d66bfb175a8dc55">hwloc_obj_type_t</a> { <br/>
&nbsp;&nbsp;<a class="el" href="group__hwlocality__types.php#ggacd37bb612667dc437d66bfb175a8dc55a3aa1b842d1fd4207ebce171f95a244ec">HWLOC_OBJ_SYSTEM</a>, 
<a class="el" href="group__hwlocality__types.php#ggacd37bb612667dc437d66bfb175a8dc55a3f4e83ffc4a259354959ae8a9eaa2a80">HWLOC_OBJ_MACHINE</a>, 
<a class="el" href="group__hwlocality__types.php#ggacd37bb612667dc437d66bfb175a8dc55aaf0964881117bdedf1a5e9332cd120dd">HWLOC_OBJ_NODE</a>, 
<a class="el" href="group__hwlocality__types.php#ggacd37bb612667dc437d66bfb175a8dc55a1ac6e07775ae4324b3fe9dbd72c785ec">HWLOC_OBJ_SOCKET</a>, 
<br/>
&nbsp;&nbsp;<a class="el" href="group__hwlocality__types.php#ggacd37bb612667dc437d66bfb175a8dc55a56ee0b7eca88f363b75b34fdde8c9ddc">HWLOC_OBJ_CACHE</a>, 
<a class="el" href="group__hwlocality__types.php#ggacd37bb612667dc437d66bfb175a8dc55ac793958f330bca371aa1535de8aff45f">HWLOC_OBJ_CORE</a>, 
<a class="el" href="group__hwlocality__types.php#ggacd37bb612667dc437d66bfb175a8dc55a5e0ccbbd5922cbb07b53fe892b91b8f2">HWLOC_OBJ_PROC</a>, 
<a class="el" href="group__hwlocality__types.php#ggacd37bb612667dc437d66bfb175a8dc55a19f8a6953fa91efc76bcbcdf2d22de4d">HWLOC_OBJ_MISC</a>
<br/>
 }</td></tr>
<tr><td class="mdescLeft">&nbsp;</td><td class="mdescRight"><p>Type of topology object. </p>
 <a href="group__hwlocality__types.php#gacd37bb612667dc437d66bfb175a8dc55">More...</a><br/></td></tr>
<tr><td class="memItemLeft" align="right" valign="top">enum &nbsp;</td><td class="memItemRight" valign="bottom"><a class="el" href="group__hwlocality__configuration.php#gada025d3ec20b4b420f8038d23d6e7bde">hwloc_topology_flags_e</a> { <a class="el" href="group__hwlocality__configuration.php#ggada025d3ec20b4b420f8038d23d6e7bdea129b4fea1300be22bbaf0bb0958994c8">HWLOC_TOPOLOGY_FLAG_WHOLE_SYSTEM</a> =  (1&lt;&lt;0), 
<a class="el" href="group__hwlocality__configuration.php#ggada025d3ec20b4b420f8038d23d6e7bdea6ecb6abc6a0bb75e81564f8bca85783b">HWLOC_TOPOLOGY_FLAG_IS_THISSYSTEM</a> =  (1&lt;&lt;1)
 }</td></tr>
<tr><td class="mdescLeft">&nbsp;</td><td class="mdescRight"><p>Flags to be set onto a topology context before load. </p>
 <a href="group__hwlocality__configuration.php#gada025d3ec20b4b420f8038d23d6e7bde">More...</a><br/></td></tr>
<tr><td class="memItemLeft" align="right" valign="top">enum &nbsp;</td><td class="memItemRight" valign="bottom"><a class="el" href="group__hwlocality__binding.php#ga9b2de9a34a18edb39fb272adf9c33622">hwloc_cpubind_policy_t</a> { <a class="el" href="group__hwlocality__binding.php#gga9b2de9a34a18edb39fb272adf9c33622a2e0dd0128dac6b03408c7dd170477fdc">HWLOC_CPUBIND_PROCESS</a> =  (1&lt;&lt;0), 
<a class="el" href="group__hwlocality__binding.php#gga9b2de9a34a18edb39fb272adf9c33622af1b6bbad00d7b1017b918e3719f4d421">HWLOC_CPUBIND_THREAD</a> =  (1&lt;&lt;1), 
<a class="el" href="group__hwlocality__binding.php#gga9b2de9a34a18edb39fb272adf9c33622a679a7e0f0c7ee06b123565f90d98e7fa">HWLOC_CPUBIND_STRICT</a> =  (1&lt;&lt;2)
 }</td></tr>
<tr><td class="mdescLeft">&nbsp;</td><td class="mdescRight"><p>Process/Thread binding policy. </p>
 <a href="group__hwlocality__binding.php#ga9b2de9a34a18edb39fb272adf9c33622">More...</a><br/></td></tr>
<tr><td colspan="2"><h2>Functions</h2></td></tr>
<tr><td class="memItemLeft" align="right" valign="top">int&nbsp;</td><td class="memItemRight" valign="bottom"><a class="el" href="group__hwlocality__types.php#ga1820ea0dfd8e9dca28f9ea7624df5ae2">hwloc_compare_types</a> (<a class="el" href="group__hwlocality__types.php#gacd37bb612667dc437d66bfb175a8dc55">hwloc_obj_type_t</a> type1, <a class="el" href="group__hwlocality__types.php#gacd37bb612667dc437d66bfb175a8dc55">hwloc_obj_type_t</a> type2)</td></tr>
<tr><td class="mdescLeft">&nbsp;</td><td class="mdescRight">Compare the depth of two object types.  <a href="group__hwlocality__types.php#ga1820ea0dfd8e9dca28f9ea7624df5ae2"></a><br/></td></tr>
<tr><td class="memItemLeft" align="right" valign="top">int&nbsp;</td><td class="memItemRight" valign="bottom"><a class="el" href="group__hwlocality__creation.php#ga03fd4a16d8b9ee1ffc32b25fd2f6bdfa">hwloc_topology_init</a> (<a class="el" href="group__hwlocality__topology.php#ga9d1e76ee15a7dee158b786c30b6a6e38">hwloc_topology_t</a> *topologyp)</td></tr>
<tr><td class="mdescLeft">&nbsp;</td><td class="mdescRight">Allocate a topology context.  <a href="group__hwlocality__creation.php#ga03fd4a16d8b9ee1ffc32b25fd2f6bdfa"></a><br/></td></tr>
<tr><td class="memItemLeft" align="right" valign="top">int&nbsp;</td><td class="memItemRight" valign="bottom"><a class="el" href="group__hwlocality__creation.php#gabdf58d87ad77f6615fccdfe0535ff826">hwloc_topology_load</a> (<a class="el" href="group__hwlocality__topology.php#ga9d1e76ee15a7dee158b786c30b6a6e38">hwloc_topology_t</a> topology)</td></tr>
<tr><td class="mdescLeft">&nbsp;</td><td class="mdescRight">Build the actual topology.  <a href="group__hwlocality__creation.php#gabdf58d87ad77f6615fccdfe0535ff826"></a><br/></td></tr>
<tr><td class="memItemLeft" align="right" valign="top">void&nbsp;</td><td class="memItemRight" valign="bottom"><a class="el" href="group__hwlocality__creation.php#ga9f34a640b6fd28d23699d4d084667b15">hwloc_topology_destroy</a> (<a class="el" href="group__hwlocality__topology.php#ga9d1e76ee15a7dee158b786c30b6a6e38">hwloc_topology_t</a> topology)</td></tr>
<tr><td class="mdescLeft">&nbsp;</td><td class="mdescRight">Terminate and free a topology context.  <a href="group__hwlocality__creation.php#ga9f34a640b6fd28d23699d4d084667b15"></a><br/></td></tr>
<tr><td class="memItemLeft" align="right" valign="top">void&nbsp;</td><td class="memItemRight" valign="bottom"><a class="el" href="group__hwlocality__creation.php#gaf6746bc3a558ef1ac8348b4491d091b5">hwloc_topology_check</a> (<a class="el" href="group__hwlocality__topology.php#ga9d1e76ee15a7dee158b786c30b6a6e38">hwloc_topology_t</a> topology)</td></tr>
<tr><td class="mdescLeft">&nbsp;</td><td class="mdescRight">Run internal checks on a topology structure.  <a href="group__hwlocality__creation.php#gaf6746bc3a558ef1ac8348b4491d091b5"></a><br/></td></tr>
<tr><td class="memItemLeft" align="right" valign="top">int&nbsp;</td><td class="memItemRight" valign="bottom"><a class="el" href="group__hwlocality__configuration.php#gafcf30842e8cb47b4c3dcaebecea31e17">hwloc_topology_ignore_type</a> (<a class="el" href="group__hwlocality__topology.php#ga9d1e76ee15a7dee158b786c30b6a6e38">hwloc_topology_t</a> topology, <a class="el" href="group__hwlocality__types.php#gacd37bb612667dc437d66bfb175a8dc55">hwloc_obj_type_t</a> type)</td></tr>
<tr><td class="mdescLeft">&nbsp;</td><td class="mdescRight">Ignore an object type.  <a href="group__hwlocality__configuration.php#gafcf30842e8cb47b4c3dcaebecea31e17"></a><br/></td></tr>
<tr><td class="memItemLeft" align="right" valign="top">int&nbsp;</td><td class="memItemRight" valign="bottom"><a class="el" href="group__hwlocality__configuration.php#ga1f987bca941d6949faf7b1554dd7bc12">hwloc_topology_ignore_type_keep_structure</a> (<a class="el" href="group__hwlocality__topology.php#ga9d1e76ee15a7dee158b786c30b6a6e38">hwloc_topology_t</a> topology, <a class="el" href="group__hwlocality__types.php#gacd37bb612667dc437d66bfb175a8dc55">hwloc_obj_type_t</a> type)</td></tr>
<tr><td class="mdescLeft">&nbsp;</td><td class="mdescRight">Ignore an object type if it does not bring any structure.  <a href="group__hwlocality__configuration.php#ga1f987bca941d6949faf7b1554dd7bc12"></a><br/></td></tr>
<tr><td class="memItemLeft" align="right" valign="top">int&nbsp;</td><td class="memItemRight" valign="bottom"><a class="el" href="group__hwlocality__configuration.php#ga7c9cf147442d65d755c664ccde3bb3ef">hwloc_topology_ignore_all_keep_structure</a> (<a class="el" href="group__hwlocality__topology.php#ga9d1e76ee15a7dee158b786c30b6a6e38">hwloc_topology_t</a> topology)</td></tr>
<tr><td class="mdescLeft">&nbsp;</td><td class="mdescRight">Ignore all objects that do not bring any structure.  <a href="group__hwlocality__configuration.php#ga7c9cf147442d65d755c664ccde3bb3ef"></a><br/></td></tr>
<tr><td class="memItemLeft" align="right" valign="top">int&nbsp;</td><td class="memItemRight" valign="bottom"><a class="el" href="group__hwlocality__configuration.php#gaaeed4df656979e5f16befea9d29b814b">hwloc_topology_set_flags</a> (<a class="el" href="group__hwlocality__topology.php#ga9d1e76ee15a7dee158b786c30b6a6e38">hwloc_topology_t</a> topology, unsigned long flags)</td></tr>
<tr><td class="mdescLeft">&nbsp;</td><td class="mdescRight">Set OR'ed flags to non-yet-loaded topology.  <a href="group__hwlocality__configuration.php#gaaeed4df656979e5f16befea9d29b814b"></a><br/></td></tr>
<tr><td class="memItemLeft" align="right" valign="top">int&nbsp;</td><td class="memItemRight" valign="bottom"><a class="el" href="group__hwlocality__configuration.php#ga45a6b5dd59be36879a64a7f73e0363c2">hwloc_topology_set_fsroot</a> (<a class="el" href="group__hwlocality__topology.php#ga9d1e76ee15a7dee158b786c30b6a6e38">hwloc_topology_t</a> restrict topology, const char *restrict fsroot_path)</td></tr>
<tr><td class="mdescLeft">&nbsp;</td><td class="mdescRight">Change the file-system root path when building the topology from sysfs/procfs.  <a href="group__hwlocality__configuration.php#ga45a6b5dd59be36879a64a7f73e0363c2"></a><br/></td></tr>
<tr><td class="memItemLeft" align="right" valign="top">int&nbsp;</td><td class="memItemRight" valign="bottom"><a class="el" href="group__hwlocality__configuration.php#ga5c11f6e454ebd5f4089670269e097a1e">hwloc_topology_set_synthetic</a> (<a class="el" href="group__hwlocality__topology.php#ga9d1e76ee15a7dee158b786c30b6a6e38">hwloc_topology_t</a> restrict topology, const char *restrict description)</td></tr>
<tr><td class="mdescLeft">&nbsp;</td><td class="mdescRight">Enable synthetic topology.  <a href="group__hwlocality__configuration.php#ga5c11f6e454ebd5f4089670269e097a1e"></a><br/></td></tr>
<tr><td class="memItemLeft" align="right" valign="top">int&nbsp;</td><td class="memItemRight" valign="bottom"><a class="el" href="group__hwlocality__configuration.php#ga29b8ebec1b85b324af18fdf5040806bf">hwloc_topology_set_xml</a> (<a class="el" href="group__hwlocality__topology.php#ga9d1e76ee15a7dee158b786c30b6a6e38">hwloc_topology_t</a> restrict topology, const char *restrict xmlpath)</td></tr>
<tr><td class="mdescLeft">&nbsp;</td><td class="mdescRight">Enable XML-file based topology.  <a href="group__hwlocality__configuration.php#ga29b8ebec1b85b324af18fdf5040806bf"></a><br/></td></tr>
<tr><td class="memItemLeft" align="right" valign="top">unsigned&nbsp;</td><td class="memItemRight" valign="bottom"><a class="el" href="group__hwlocality__information.php#ga3cc2255e237b751a6c8efa8703b3daf5">hwloc_topology_get_depth</a> (<a class="el" href="group__hwlocality__topology.php#ga9d1e76ee15a7dee158b786c30b6a6e38">hwloc_topology_t</a> restrict topology)</td></tr>
<tr><td class="mdescLeft">&nbsp;</td><td class="mdescRight">Get the depth of the hierachical tree of objects.  <a href="group__hwlocality__information.php#ga3cc2255e237b751a6c8efa8703b3daf5"></a><br/></td></tr>
<tr><td class="memItemLeft" align="right" valign="top">int&nbsp;</td><td class="memItemRight" valign="bottom"><a class="el" href="group__hwlocality__information.php#ga8bec782e21be313750da70cf7428b374">hwloc_get_type_depth</a> (<a class="el" href="group__hwlocality__topology.php#ga9d1e76ee15a7dee158b786c30b6a6e38">hwloc_topology_t</a> topology, <a class="el" href="group__hwlocality__types.php#gacd37bb612667dc437d66bfb175a8dc55">hwloc_obj_type_t</a> type)</td></tr>
<tr><td class="mdescLeft">&nbsp;</td><td class="mdescRight">Returns the depth of objects of type <code>type</code>.  <a href="group__hwlocality__information.php#ga8bec782e21be313750da70cf7428b374"></a><br/></td></tr>
<tr><td class="memItemLeft" align="right" valign="top"><a class="el" href="group__hwlocality__types.php#gacd37bb612667dc437d66bfb175a8dc55">hwloc_obj_type_t</a>&nbsp;</td><td class="memItemRight" valign="bottom"><a class="el" href="group__hwlocality__information.php#ga8cc04ad9eb03b0b74d420adf8cc11ad2">hwloc_get_depth_type</a> (<a class="el" href="group__hwlocality__topology.php#ga9d1e76ee15a7dee158b786c30b6a6e38">hwloc_topology_t</a> topology, unsigned depth)</td></tr>
<tr><td class="mdescLeft">&nbsp;</td><td class="mdescRight">Returns the type of objects at depth <code>depth</code>.  <a href="group__hwlocality__information.php#ga8cc04ad9eb03b0b74d420adf8cc11ad2"></a><br/></td></tr>
<tr><td class="memItemLeft" align="right" valign="top">unsigned&nbsp;</td><td class="memItemRight" valign="bottom"><a class="el" href="group__hwlocality__information.php#gab17065e3d53455973844568d9f21c72c">hwloc_get_nbobjs_by_depth</a> (<a class="el" href="group__hwlocality__topology.php#ga9d1e76ee15a7dee158b786c30b6a6e38">hwloc_topology_t</a> topology, unsigned depth)</td></tr>
<tr><td class="mdescLeft">&nbsp;</td><td class="mdescRight">Returns the width of level at depth <code>depth</code>.  <a href="group__hwlocality__information.php#gab17065e3d53455973844568d9f21c72c"></a><br/></td></tr>
<tr><td class="memItemLeft" align="right" valign="top">static inline int&nbsp;</td><td class="memItemRight" valign="bottom"><a class="el" href="group__hwlocality__information.php#gad86a90c0d3501d90410fb1a4eb36f5d0">hwloc_get_nbobjs_by_type</a> (<a class="el" href="group__hwlocality__topology.php#ga9d1e76ee15a7dee158b786c30b6a6e38">hwloc_topology_t</a> topology, <a class="el" href="group__hwlocality__types.php#gacd37bb612667dc437d66bfb175a8dc55">hwloc_obj_type_t</a> type)</td></tr>
<tr><td class="mdescLeft">&nbsp;</td><td class="mdescRight">Returns the width of level type <code>type</code>.  <a href="group__hwlocality__information.php#gad86a90c0d3501d90410fb1a4eb36f5d0"></a><br/></td></tr>
<tr><td class="memItemLeft" align="right" valign="top">int&nbsp;</td><td class="memItemRight" valign="bottom"><a class="el" href="group__hwlocality__information.php#ga29cdfde981aafc92eb89639a36b1ff9b">hwloc_topology_is_thissystem</a> (<a class="el" href="group__hwlocality__topology.php#ga9d1e76ee15a7dee158b786c30b6a6e38">hwloc_topology_t</a> restrict topology)</td></tr>
<tr><td class="mdescLeft">&nbsp;</td><td class="mdescRight">Does the topology context come from this system?  <a href="group__hwlocality__information.php#ga29cdfde981aafc92eb89639a36b1ff9b"></a><br/></td></tr>
<tr><td class="memItemLeft" align="right" valign="top"><a class="el" href="structhwloc__obj.php">hwloc_obj_t</a>&nbsp;</td><td class="memItemRight" valign="bottom"><a class="el" href="group__hwlocality__traversal.php#gabf8a98ad085460a4982cc7b74c344b71">hwloc_get_obj_by_depth</a> (<a class="el" href="group__hwlocality__topology.php#ga9d1e76ee15a7dee158b786c30b6a6e38">hwloc_topology_t</a> topology, unsigned depth, unsigned idx)</td></tr>
<tr><td class="mdescLeft">&nbsp;</td><td class="mdescRight">Returns the topology object at index <code>index</code> from depth <code>depth</code>.  <a href="group__hwlocality__traversal.php#gabf8a98ad085460a4982cc7b74c344b71"></a><br/></td></tr>
<tr><td class="memItemLeft" align="right" valign="top">static inline <a class="el" href="structhwloc__obj.php">hwloc_obj_t</a>&nbsp;</td><td class="memItemRight" valign="bottom"><a class="el" href="group__hwlocality__traversal.php#ga718b83f189c970ad16b4ec068df18612">hwloc_get_obj_by_type</a> (<a class="el" href="group__hwlocality__topology.php#ga9d1e76ee15a7dee158b786c30b6a6e38">hwloc_topology_t</a> topology, <a class="el" href="group__hwlocality__types.php#gacd37bb612667dc437d66bfb175a8dc55">hwloc_obj_type_t</a> type, unsigned idx)</td></tr>
<tr><td class="mdescLeft">&nbsp;</td><td class="mdescRight">Returns the topology object at index <code>index</code> with type <code>type</code>.  <a href="group__hwlocality__traversal.php#ga718b83f189c970ad16b4ec068df18612"></a><br/></td></tr>
<tr><td class="memItemLeft" align="right" valign="top">const char *&nbsp;</td><td class="memItemRight" valign="bottom"><a class="el" href="group__hwlocality__conversion.php#ga5ca0bf94bbbb080d0eff17a57bd90422">hwloc_obj_type_string</a> (<a class="el" href="group__hwlocality__types.php#gacd37bb612667dc437d66bfb175a8dc55">hwloc_obj_type_t</a> type)</td></tr>
<tr><td class="mdescLeft">&nbsp;</td><td class="mdescRight">Return a stringified topology object type.  <a href="group__hwlocality__conversion.php#ga5ca0bf94bbbb080d0eff17a57bd90422"></a><br/></td></tr>
<tr><td class="memItemLeft" align="right" valign="top"><a class="el" href="group__hwlocality__types.php#gacd37bb612667dc437d66bfb175a8dc55">hwloc_obj_type_t</a>&nbsp;</td><td class="memItemRight" valign="bottom"><a class="el" href="group__hwlocality__conversion.php#ga8a1eee67a1de115d264719157c109a20">hwloc_obj_type_of_string</a> (const char *string)</td></tr>
<tr><td class="mdescLeft">&nbsp;</td><td class="mdescRight">Return an object type from the string.  <a href="group__hwlocality__conversion.php#ga8a1eee67a1de115d264719157c109a20"></a><br/></td></tr>
<tr><td class="memItemLeft" align="right" valign="top">int&nbsp;</td><td class="memItemRight" valign="bottom"><a class="el" href="group__hwlocality__conversion.php#ga612dc210053b65d2466ac7ad39db92a4">hwloc_obj_snprintf</a> (char *restrict string, size_t size, <a class="el" href="group__hwlocality__topology.php#ga9d1e76ee15a7dee158b786c30b6a6e38">hwloc_topology_t</a> topology, <a class="el" href="structhwloc__obj.php">hwloc_obj_t</a> obj, const char *restrict indexprefix, int verbose)</td></tr>
<tr><td class="mdescLeft">&nbsp;</td><td class="mdescRight">Stringify a given topology object into a human-readable form.  <a href="group__hwlocality__conversion.php#ga612dc210053b65d2466ac7ad39db92a4"></a><br/></td></tr>
<tr><td class="memItemLeft" align="right" valign="top">int&nbsp;</td><td class="memItemRight" valign="bottom"><a class="el" href="group__hwlocality__conversion.php#gae001fafdeda3a67695d406affde1ab0d">hwloc_obj_cpuset_snprintf</a> (char *restrict str, size_t size, size_t nobj, const <a class="el" href="structhwloc__obj.php">hwloc_obj_t</a> *restrict objs)</td></tr>
<tr><td class="mdescLeft">&nbsp;</td><td class="mdescRight">Stringify the cpuset containing a set of objects.  <a href="group__hwlocality__conversion.php#gae001fafdeda3a67695d406affde1ab0d"></a><br/></td></tr>
<tr><td class="memItemLeft" align="right" valign="top">int&nbsp;</td><td class="memItemRight" valign="bottom"><a class="el" href="group__hwlocality__binding.php#ga47053da286384d86ec3e4fb3fe148dae">hwloc_set_cpubind</a> (<a class="el" href="group__hwlocality__topology.php#ga9d1e76ee15a7dee158b786c30b6a6e38">hwloc_topology_t</a> topology, const <a class="el" href="group__hwlocality__cpuset.php#ga7366332f7090f5b54d4b25a0c2c4b411">hwloc_cpuset_t</a> set, int policy)</td></tr>
<tr><td class="mdescLeft">&nbsp;</td><td class="mdescRight">Bind current process or thread on cpus given in cpuset <code>set</code>.  <a href="group__hwlocality__binding.php#ga47053da286384d86ec3e4fb3fe148dae"></a><br/></td></tr>
<tr><td class="memItemLeft" align="right" valign="top">int&nbsp;</td><td class="memItemRight" valign="bottom"><a class="el" href="group__hwlocality__binding.php#ga27f372f8d5fd8c9844318b492b316dfb">hwloc_set_proc_cpubind</a> (<a class="el" href="group__hwlocality__topology.php#ga9d1e76ee15a7dee158b786c30b6a6e38">hwloc_topology_t</a> topology, hwloc_pid_t pid, const <a class="el" href="group__hwlocality__cpuset.php#ga7366332f7090f5b54d4b25a0c2c4b411">hwloc_cpuset_t</a> set, int policy)</td></tr>
<tr><td class="mdescLeft">&nbsp;</td><td class="mdescRight">Bind a process <code>pid</code> on cpus given in cpuset <code>set</code>.  <a href="group__hwlocality__binding.php#ga27f372f8d5fd8c9844318b492b316dfb"></a><br/></td></tr>
</table>
<hr/><a name="_details"></a><h2>Detailed Description</h2>
<p>The hwloc API. </p>
<p>See <a class="el" href="cpuset_8h.php" title="The Cpuset API, for use in hwloc itself.">hwloc/cpuset.h</a> for CPU set specific macros. See <a class="el" href="helper_8h.php" title="High-level hwloc traversal helpers.">hwloc/helper.h</a> for high-level topology traversal helpers. </p>
</div>
<?php
include_once("$topdir/includes/footer.inc");