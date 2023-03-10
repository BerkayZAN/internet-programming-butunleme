/*
 * CKFinder
 * ========
 * http://ckfinder.com
 * Copyright (C) 2007-2011, CKSource - Frederico Knabben. All rights reserved.
 *
 * The software, this file and its contents are subject to the CKFinder
 * License. Please read the license.txt file before using, installing, copying,
 * modifying or distribute this file or part of its contents. The contents of
 * this file is part of the Source Code of CKFinder.
 *
 */

/**
 * @fileOverview Defines the {@link CKFinder.lang} object, for the Swedish
 *		language. This is the base file for all translations.
*/

/**
 * Constains the dictionary of language entries.
 * @namespace
 */
CKFinder.lang['sv'] =
{
	appTitle : 'CKFinder', // MISSING

	// Common messages and labels.
	common :
	{
		// Put the voice-only part of the label in the span.
		unavailable		: '%1<span class="cke_accessibility">, unavailable</span>', // MISSING
		confirmCancel	: 'Some of the options have been changed. Are you sure to close the dialog?', // MISSING
		ok				: 'OK', // MISSING
		cancel			: 'Cancel', // MISSING
		confirmationTitle	: 'Confirmation', // MISSING
		messageTitle	: 'Information', // MISSING
		inputTitle		: 'Question', // MISSING
		undo			: 'Undo', // MISSING
		redo			: 'Redo', // MISSING
		skip			: 'Skip', // MISSING
		skipAll			: 'Skip all', // MISSING
		makeDecision	: 'What action should be taken?', // MISSING
		rememberDecision: 'Remember my decision' // MISSING
	},


	dir : 'ltr', // MISSING
	HelpLang : 'en',
	LangCode : 'en', // MISSING

	// Date Format
	//		d    : Day
	//		dd   : Day (padding zero)
	//		m    : Month
	//		mm   : Month (padding zero)
	//		yy   : Year (two digits)
	//		yyyy : Year (four digits)
	//		h    : Hour (12 hour clock)
	//		hh   : Hour (12 hour clock, padding zero)
	//		H    : Hour (24 hour clock)
	//		HH   : Hour (24 hour clock, padding zero)
	//		M    : Minute
	//		MM   : Minute (padding zero)
	//		a    : Firt char of AM/PM
	//		aa   : AM/PM
	DateTime : 'yyyy-mm-dd HH:MM',
	DateAmPm : ['AM', 'PM'],

	// Folders
	FoldersTitle	: 'Mappar',
	FolderLoading	: 'Laddar...',
	FolderNew		: 'Skriv namnet p?? den nya mappen: ',
	FolderRename	: 'Skriv det nya namnet p?? mappen: ',
	FolderDelete	: '??r du s??ker p?? att du vill radera mappen "%1"?',
	FolderRenaming	: ' (Byter mappens namn...)',
	FolderDeleting	: ' (Raderar...)',

	// Files
	FileRename		: 'Skriv det nya filnamnet: ',
	FileRenameExt	: '??r du s??ker p?? att du fill ??ndra p?? fil??ndelsen? Filen kan bli oanv??ndbar',
	FileRenaming	: 'Byter filnamn...',
	FileDelete		: '??r du s??ker p?? att du vill radera filen "%1"?',
	FilesLoading	: 'Loading...', // MISSING
	FilesEmpty		: 'Empty folder', // MISSING
	FilesMoved		: 'File %1 moved into %2:%3', // MISSING
	FilesCopied		: 'File %1 copied into %2:%3', // MISSING

	// Basket
	BasketFolder		: 'Basket', // MISSING
	BasketClear			: 'Clear Basket', // MISSING
	BasketRemove		: 'Remove from basket', // MISSING
	BasketOpenFolder	: 'Open parent folder', // MISSING
	BasketTruncateConfirm : 'Do you really want to remove all files from the basket?', // MISSING
	BasketRemoveConfirm	: 'Do you really want to remove the file "%1" from the basket?', // MISSING
	BasketEmpty			: 'No files in the basket, drag\'n\'drop some.', // MISSING
	BasketCopyFilesHere	: 'Copy Files from Basket', // MISSING
	BasketMoveFilesHere	: 'Move Files from Basket', // MISSING

	BasketPasteErrorOther	: 'File %s error: %e', // MISSING
	BasketPasteMoveSuccess	: 'The following files were moved: %s', // MISSING
	BasketPasteCopySuccess	: 'The following files were copied: %s', // MISSING

	// Toolbar Buttons (some used elsewhere)
	Upload		: 'Ladda upp',
	UploadTip	: 'Ladda upp en ny fil',
	Refresh		: 'Uppdatera',
	Settings	: 'Inst??llningar',
	Help		: 'Hj??lp',
	HelpTip		: 'Hj??lp',

	// Context Menus
	Select			: 'Infoga bild',
	SelectThumbnail : 'Infoga som tumnagel',
	View			: 'Visa',
	Download		: 'Ladda ner',

	NewSubFolder	: 'Ny Undermapp',
	Rename			: 'Byt namn',
	Delete			: 'Radera',

	CopyDragDrop	: 'Copy file here', // MISSING
	MoveDragDrop	: 'Move file here', // MISSING

	// Dialogs
	RenameDlgTitle		: 'Rename', // MISSING
	NewNameDlgTitle		: 'New name', // MISSING
	FileExistsDlgTitle	: 'File already exists', // MISSING
	SysErrorDlgTitle : 'System error', // MISSING

	FileOverwrite	: 'Overwrite', // MISSING
	FileAutorename	: 'Auto-rename', // MISSING

	// Generic
	OkBtn		: 'OK',
	CancelBtn	: 'Avbryt',
	CloseBtn	: 'St??ng',

	// Upload Panel
	UploadTitle			: 'Ladda upp en ny fil',
	UploadSelectLbl		: 'V??lj fil att ladda upp',
	UploadProgressLbl	: '(Laddar upp filen, var god v??nta...)',
	UploadBtn			: 'Ladda upp den valda filen',
	UploadBtnCancel		: 'Cancel', // MISSING

	UploadNoFileMsg		: 'V??lj en fil fr??n din dator',
	UploadNoFolder		: 'Please select folder before uploading.', // MISSING
	UploadNoPerms		: 'File upload not allowed.', // MISSING
	UploadUnknError		: 'Error sending the file.', // MISSING
	UploadExtIncorrect	: 'File extension not allowed in this folder.', // MISSING

	// Settings Panel
	SetTitle		: 'Inst??llningar',
	SetView			: 'Visa:',
	SetViewThumb	: 'Tumnaglar',
	SetViewList		: 'Lista',
	SetDisplay		: 'Visa:',
	SetDisplayName	: 'Filnamn',
	SetDisplayDate	: 'Datum',
	SetDisplaySize	: 'Filstorlek',
	SetSort			: 'Sortering:',
	SetSortName		: 'Filnamn',
	SetSortDate		: 'Datum',
	SetSortSize		: 'Storlek',

	// Status Bar
	FilesCountEmpty : '<Tom Mapp>',
	FilesCountOne	: '1 fil',
	FilesCountMany	: '%1 filer',

	// Size and Speed
	Kb				: '%1 kB', // MISSING
	KbPerSecond		: '%1 kB/s', // MISSING

	// Connector Error Messages.
	ErrorUnknown	: 'Beg??ran kunde inte utf??ras eftersom ett fel uppstod. (Error %1)',
	Errors :
	{
	 10 : 'Ogiltig beg??ran.',
	 11 : 'Resursens typ var inte specificerad i f??rfr??gan.',
	 12 : 'Den efterfr??gade resurstypen ??r inte giltig.',
	102 : 'Ogiltigt fil- eller mappnamn.',
	103 : 'Beg??ran kunde inte utf??ras p.g.a. restriktioner av r??ttigheterna.',
	104 : 'Beg??ran kunde inte utf??ras p.g.a. restriktioner av r??ttigheter i filsystemet.',
	105 : 'Ogiltig fil??ndelse.',
	109 : 'Ogiltig beg??ran.',
	110 : 'Ok??nt fel.',
	115 : 'En fil eller mapp med aktuellt namn finns redan.',
	116 : 'Mappen kunde inte hittas. Var god uppdatera sidan och f??rs??k igen.',
	117 : 'Filen kunde inte hittas. Var god uppdatera sidan och f??rs??k igen.',
	118 : 'Source and target paths are equal.', // MISSING
	201 : 'En fil med aktuellt namn fanns redan. Den uppladdade filen har d??pts om till "%1"',
	202 : 'Ogiltig fil',
	203 : 'Ogiltig fil. Filen var f??r stor.',
	204 : 'Den uppladdade filen var korrupt.',
	205 : 'En tillf??llig mapp f??r uppladdning ??r inte tillg??nglig p?? servern.',
	206 : 'Uppladdningen stoppades av s??kerhetssk??l. Filen inneh??ller HTML-liknande data.',
	207 : 'Den uppladdade filen har d??pts om till "%1"',
	300 : 'Moving file(s) failed.', // MISSING
	301 : 'Copying file(s) failed.', // MISSING
	500 : 'Filhanteraren har stoppats av s??kerhetssk??l. Var god kontakta administrat??ren f??r att kontrollera konfigurationsfilen f??r CKFinder.',
	501 : 'St??d f??r tumnaglar har st??ngts av.'
	},

	// Other Error Messages.
	ErrorMsg :
	{
		FileEmpty		: 'Filnamnet f??r inte vara tomt',
		FileExists		: 'File %s already exists', // MISSING
		FolderEmpty		: 'Mappens namn f??r inte vara tomt',

		FileInvChar		: 'Filnamnet f??r inte inneh??lla n??got av f??ljande tecken: \n\\ / : * ? " < > |',
		FolderInvChar	: 'Mappens namn f??r inte inneh??lla n??got av f??ljande tecken: \n\\ / : * ? " < > |',

		PopupBlockView	: 'Det gick inte att ??ppna filen i ett nytt f??nster. ??ndra inst??llningarna i din webbl??sare och till??t popupf??nster f??r den h??r hemsidan.'
	},

	// Imageresize plugin
	Imageresize :
	{
		dialogTitle		: 'Resize %s', // MISSING
		sizeTooBig		: 'Cannot set image height or width to a value bigger than the original size (%size).', // MISSING
		resizeSuccess	: 'Image resized successfully.', // MISSING
		thumbnailNew	: 'Create new thumbnail', // MISSING
		thumbnailSmall	: 'Small (%s)', // MISSING
		thumbnailMedium	: 'Medium (%s)', // MISSING
		thumbnailLarge	: 'Large (%s)', // MISSING
		newSize			: 'Set new size', // MISSING
		width			: 'Width', // MISSING
		height			: 'Height', // MISSING
		invalidHeight	: 'Invalid height.', // MISSING
		invalidWidth	: 'Invalid width.', // MISSING
		invalidName		: 'Invalid file name.', // MISSING
		newImage		: 'Create new image', // MISSING
		noExtensionChange : 'The file extension cannot be changed.', // MISSING
		imageSmall		: 'Source image is too small', // MISSING
		contextMenuName	: 'Resize' // MISSING
	},

	// Fileeditor plugin
	Fileeditor :
	{
		save			: 'Save', // MISSING
		fileOpenError	: 'Unable to open file.', // MISSING
		fileSaveSuccess	: 'File saved successfully.', // MISSING
		contextMenuName	: 'Edit', // MISSING
		loadingFile		: 'Loading file, please wait...' // MISSING
	}
};
