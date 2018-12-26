#!/usr/bin/env bash

protoc -I ../../proto --php_out=./src \
--grpc_out=./src \
--plugin=protoc-gen-grpc=../../proto/grpc/bins/opt/grpc_php_plugin \
../../proto/user.proto