<?php

/***************************************************************
 * Extension Manager/Repository config file for ext "filefill".
 *
 * Auto generated 05-05-2022 18:19
 *
 * Manual updates:
 * Only the data in the array - everything else is removed by next
 * writing. "version" and "dependencies" must not be touched!
 ***************************************************************/

$EM_CONF[$_EXTKEY] = array (
  'title' => 'File Fill',
  'description' => 'Find and fetch missing local files from different remotes',
  'category' => 'misc',
  'author' => 'Nicole Cordes',
  'author_email' => 'typo3@cordes.co',
  'author_company' => 'biz-design',
  'state' => 'stable',
  'uploadfolder' => 0,
  'createDirs' => '',
  'clearCacheOnLoad' => 0,
  'version' => '4.1.1',
  'constraints' => 
  array (
    'depends' => 
    array (
      'typo3' => '10.4.11-11.5.99',
    ),
    'conflicts' => 
    array (
    ),
    'suggests' => 
    array (
    ),
  ),
  '_md5_values_when_last_written' => 'a:45:{s:9:"ChangeLog";s:4:"ab7f";s:7:"LICENSE";s:4:"b234";s:9:"README.md";s:4:"ecb7";s:13:"composer.json";s:4:"26ff";s:13:"composer.lock";s:4:"5bf8";s:12:"ext_icon.png";s:4:"970b";s:17:"ext_localconf.php";s:4:"5e7e";s:14:"ext_tables.sql";s:4:"5d8e";s:16:"phpunit.xml.dist";s:4:"316a";s:24:"sonar-project.properties";s:4:"ea9f";s:35:"Classes/Command/AbstractCommand.php";s:4:"80f5";s:33:"Classes/Command/DeleteCommand.php";s:4:"bf98";s:32:"Classes/Command/ResetCommand.php";s:4:"df26";s:58:"Classes/EventListener/FileProcessingEventEventListener.php";s:4:"b00c";s:68:"Classes/EventListener/ResourceStorageInitializationEventListener.php";s:4:"ae8a";s:47:"Classes/Exception/MissingInterfaceException.php";s:4:"a325";s:46:"Classes/Exception/UnknownResourceException.php";s:4:"b4ac";s:40:"Classes/Form/Element/ShowDeleteFiles.php";s:4:"7a5b";s:41:"Classes/Form/Element/ShowMissingFiles.php";s:4:"9b38";s:29:"Classes/Hooks/DeleteFiles.php";s:4:"2fbd";s:35:"Classes/Hooks/FlexFormToolsHook.php";s:4:"33f9";s:35:"Classes/Hooks/ResetMissingFiles.php";s:4:"b3af";s:47:"Classes/Repository/DomainResourceRepository.php";s:4:"068b";s:37:"Classes/Repository/FileRepository.php";s:4:"b76a";s:45:"Classes/Resource/RemoteResourceCollection.php";s:4:"86a3";s:52:"Classes/Resource/RemoteResourceCollectionFactory.php";s:4:"d112";s:44:"Classes/Resource/RemoteResourceInterface.php";s:4:"82ca";s:42:"Classes/Resource/Driver/FileFillDriver.php";s:4:"fe02";s:43:"Classes/Resource/Handler/DomainResource.php";s:4:"c135";s:48:"Classes/Resource/Handler/PlaceholderResource.php";s:4:"d044";s:47:"Classes/Resource/Handler/StaticFileResource.php";s:4:"782f";s:46:"Classes/Resource/Handler/SysDomainResource.php";s:4:"2d30";s:26:"Configuration/Commands.php";s:4:"4ad1";s:27:"Configuration/Services.yaml";s:4:"f140";s:37:"Configuration/FlexForms/Resources.xml";s:4:"6a88";s:48:"Configuration/TCA/Overrides/sys_file_storage.php";s:4:"0038";s:27:"Resources/Private/.htaccess";s:4:"8594";s:43:"Resources/Private/Language/locallang_db.xlf";s:4:"0d24";s:36:"Resources/Public/Icons/Extension.svg";s:4:"0ad6";s:47:"Tests/Functional/AbstractFunctionalTestCase.php";s:4:"965e";s:33:"Tests/Functional/FilefillTest.php";s:4:"3dad";s:47:"Tests/Functional/Fixtures/Database/sys_file.xml";s:4:"2cb0";s:56:"Tests/Functional/Fixtures/Database/sys_file_metadata.xml";s:4:"bd9a";s:55:"Tests/Functional/Fixtures/Database/sys_file_storage.xml";s:4:"0679";s:54:"Tests/Unit/Resource/Handler/StaticFileResourceTest.php";s:4:"73a4";}',
);

