#!/bin/bash
rm -f acptemplates.tar
7z a -ttar -mx=9 acptemplates.tar ./acptemplates/*
rm -f files.tar
7z a -ttar -mx=9 files.tar ./files/*
rm -f dev.hanashi.wsc.wysiwyg-option.tar
7z a -ttar -mx=9 dev.hanashi.wsc.wysiwyg-option.tar ./* -x!acptemplates -x!files -x!templates -x!dev.hanashi.wsc.wysiwyg-option.tar -x!.git -x!.gitignore -x!make.bat -x!make.sh
