#!/usr/bin/env bash
brew services start homebrew/php/php56
caddy
brew services stop homebrew/php/php56
