<?php
// This file was auto-generated from sdk-root/src/data/cloud9/2017-09-23/api-2.json
return [ 'version' => '2.0', 'metadata' => [ 'apiVersion' => '2017-09-23', 'endpointPrefix' => 'cloud9', 'jsonVersion' => '1.1', 'protocol' => 'json', 'serviceFullName' => 'AWS Cloud9', 'signatureVersion' => 'v4', 'targetPrefix' => 'AWSCloud9WorkspaceManagementService', 'uid' => 'cloud9-2017-09-23', ], 'operations' => [ 'CreateEnvironmentEC2' => [ 'name' => 'CreateEnvironmentEC2', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'CreateEnvironmentEC2Request', ], 'output' => [ 'shape' => 'CreateEnvironmentEC2Result', ], 'errors' => [ [ 'shape' => 'BadRequestException', ], [ 'shape' => 'ConflictException', ], [ 'shape' => 'NotFoundException', ], [ 'shape' => 'ForbiddenException', ], [ 'shape' => 'TooManyRequestsException', ], [ 'shape' => 'LimitExceededException', ], [ 'shape' => 'InternalServerErrorException', ], ], 'idempotent' => true, ], 'CreateEnvironmentMembership' => [ 'name' => 'CreateEnvironmentMembership', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'CreateEnvironmentMembershipRequest', ], 'output' => [ 'shape' => 'CreateEnvironmentMembershipResult', ], 'errors' => [ [ 'shape' => 'BadRequestException', ], [ 'shape' => 'ConflictException', ], [ 'shape' => 'NotFoundException', ], [ 'shape' => 'ForbiddenException', ], [ 'shape' => 'TooManyRequestsException', ], [ 'shape' => 'LimitExceededException', ], [ 'shape' => 'InternalServerErrorException', ], ], 'idempotent' => true, ], 'DeleteEnvironment' => [ 'name' => 'DeleteEnvironment', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'DeleteEnvironmentRequest', ], 'output' => [ 'shape' => 'DeleteEnvironmentResult', ], 'errors' => [ [ 'shape' => 'BadRequestException', ], [ 'shape' => 'ConflictException', ], [ 'shape' => 'NotFoundException', ], [ 'shape' => 'ForbiddenException', ], [ 'shape' => 'TooManyRequestsException', ], [ 'shape' => 'LimitExceededException', ], [ 'shape' => 'InternalServerErrorException', ], ], 'idempotent' => true, ], 'DeleteEnvironmentMembership' => [ 'name' => 'DeleteEnvironmentMembership', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'DeleteEnvironmentMembershipRequest', ], 'output' => [ 'shape' => 'DeleteEnvironmentMembershipResult', ], 'errors' => [ [ 'shape' => 'BadRequestException', ], [ 'shape' => 'ConflictException', ], [ 'shape' => 'NotFoundException', ], [ 'shape' => 'ForbiddenException', ], [ 'shape' => 'TooManyRequestsException', ], [ 'shape' => 'LimitExceededException', ], [ 'shape' => 'InternalServerErrorException', ], ], 'idempotent' => true, ], 'DescribeEnvironmentMemberships' => [ 'name' => 'DescribeEnvironmentMemberships', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'DescribeEnvironmentMembershipsRequest', ], 'output' => [ 'shape' => 'DescribeEnvironmentMembershipsResult', ], 'errors' => [ [ 'shape' => 'BadRequestException', ], [ 'shape' => 'ConflictException', ], [ 'shape' => 'NotFoundException', ], [ 'shape' => 'ForbiddenException', ], [ 'shape' => 'TooManyRequestsException', ], [ 'shape' => 'LimitExceededException', ], [ 'shape' => 'InternalServerErrorException', ], ], ], 'DescribeEnvironmentStatus' => [ 'name' => 'DescribeEnvironmentStatus', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'DescribeEnvironmentStatusRequest', ], 'output' => [ 'shape' => 'DescribeEnvironmentStatusResult', ], 'errors' => [ [ 'shape' => 'BadRequestException', ], [ 'shape' => 'ConflictException', ], [ 'shape' => 'NotFoundException', ], [ 'shape' => 'ForbiddenException', ], [ 'shape' => 'TooManyRequestsException', ], [ 'shape' => 'LimitExceededException', ], [ 'shape' => 'InternalServerErrorException', ], ], ], 'DescribeEnvironments' => [ 'name' => 'DescribeEnvironments', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'DescribeEnvironmentsRequest', ], 'output' => [ 'shape' => 'DescribeEnvironmentsResult', ], 'errors' => [ [ 'shape' => 'BadRequestException', ], [ 'shape' => 'ConflictException', ], [ 'shape' => 'NotFoundException', ], [ 'shape' => 'ForbiddenException', ], [ 'shape' => 'TooManyRequestsException', ], [ 'shape' => 'LimitExceededException', ], [ 'shape' => 'InternalServerErrorException', ], ], ], 'ListEnvironments' => [ 'name' => 'ListEnvironments', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'ListEnvironmentsRequest', ], 'output' => [ 'shape' => 'ListEnvironmentsResult', ], 'errors' => [ [ 'shape' => 'BadRequestException', ], [ 'shape' => 'ConflictException', ], [ 'shape' => 'NotFoundException', ], [ 'shape' => 'ForbiddenException', ], [ 'shape' => 'TooManyRequestsException', ], [ 'shape' => 'LimitExceededException', ], [ 'shape' => 'InternalServerErrorException', ], ], ], 'UpdateEnvironment' => [ 'name' => 'UpdateEnvironment', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'UpdateEnvironmentRequest', ], 'output' => [ 'shape' => 'UpdateEnvironmentResult', ], 'errors' => [ [ 'shape' => 'BadRequestException', ], [ 'shape' => 'ConflictException', ], [ 'shape' => 'NotFoundException', ], [ 'shape' => 'ForbiddenException', ], [ 'shape' => 'TooManyRequestsException', ], [ 'shape' => 'LimitExceededException', ], [ 'shape' => 'InternalServerErrorException', ], ], 'idempotent' => true, ], 'UpdateEnvironmentMembership' => [ 'name' => 'UpdateEnvironmentMembership', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'UpdateEnvironmentMembershipRequest', ], 'output' => [ 'shape' => 'UpdateEnvironmentMembershipResult', ], 'errors' => [ [ 'shape' => 'BadRequestException', ], [ 'shape' => 'ConflictException', ], [ 'shape' => 'NotFoundException', ], [ 'shape' => 'ForbiddenException', ], [ 'shape' => 'TooManyRequestsException', ], [ 'shape' => 'LimitExceededException', ], [ 'shape' => 'InternalServerErrorException', ], ], 'idempotent' => true, ], ], 'shapes' => [ 'AutomaticStopTimeMinutes' => [ 'type' => 'integer', 'box' => true, 'max' => 20160, ], 'BadRequestException' => [ 'type' => 'structure', 'members' => [], 'exception' => true, ], 'BoundedEnvironmentIdList' => [ 'type' => 'list', 'member' => [ 'shape' => 'EnvironmentId', ], 'max' => 25, 'min' => 1, ], 'ClientRequestToken' => [ 'type' => 'string', 'pattern' => '[\\x20-\\x7E]{10,128}', ], 'ConflictException' => [ 'type' => 'structure', 'members' => [], 'exception' => true, ], 'CreateEnvironmentEC2Request' => [ 'type' => 'structure', 'required' => [ 'name', 'instanceType', ], 'members' => [ 'name' => [ 'shape' => 'EnvironmentName', ], 'description' => [ 'shape' => 'EnvironmentDescription', ], 'clientRequestToken' => [ 'shape' => 'ClientRequestToken', ], 'instanceType' => [ 'shape' => 'InstanceType', ], 'subnetId' => [ 'shape' => 'SubnetId', ], 'automaticStopTimeMinutes' => [ 'shape' => 'AutomaticStopTimeMinutes', ], 'ownerArn' => [ 'shape' => 'UserArn', ], ], ], 'CreateEnvironmentEC2Result' => [ 'type' => 'structure', 'members' => [ 'environmentId' => [ 'shape' => 'EnvironmentId', ], ], ], 'CreateEnvironmentMembershipRequest' => [ 'type' => 'structure', 'required' => [ 'environmentId', 'userArn', 'permissions', ], 'members' => [ 'environmentId' => [ 'shape' => 'EnvironmentId', ], 'userArn' => [ 'shape' => 'UserArn', ], 'permissions' => [ 'shape' => 'MemberPermissions', ], ], ], 'CreateEnvironmentMembershipResult' => [ 'type' => 'structure', 'members' => [ 'membership' => [ 'shape' => 'EnvironmentMember', ], ], ], 'DeleteEnvironmentMembershipRequest' => [ 'type' => 'structure', 'required' => [ 'environmentId', 'userArn', ], 'members' => [ 'environmentId' => [ 'shape' => 'EnvironmentId', ], 'userArn' => [ 'shape' => 'UserArn', ], ], ], 'DeleteEnvironmentMembershipResult' => [ 'type' => 'structure', 'members' => [], ], 'DeleteEnvironmentRequest' => [ 'type' => 'structure', 'required' => [ 'environmentId', ], 'members' => [ 'environmentId' => [ 'shape' => 'EnvironmentId', ], ], ], 'DeleteEnvironmentResult' => [ 'type' => 'structure', 'members' => [], ], 'DescribeEnvironmentMembershipsRequest' => [ 'type' => 'structure', 'members' => [ 'userArn' => [ 'shape' => 'UserArn', ], 'environmentId' => [ 'shape' => 'EnvironmentId', ], 'permissions' => [ 'shape' => 'PermissionsList', ], 'nextToken' => [ 'shape' => 'String', ], 'maxResults' => [ 'shape' => 'MaxResults', ], ], ], 'DescribeEnvironmentMembershipsResult' => [ 'type' => 'structure', 'members' => [ 'memberships' => [ 'shape' => 'EnvironmentMembersList', ], 'nextToken' => [ 'shape' => 'String', ], ], ], 'DescribeEnvironmentStatusRequest' => [ 'type' => 'structure', 'required' => [ 'environmentId', ], 'members' => [ 'environmentId' => [ 'shape' => 'EnvironmentId', ], ], ], 'DescribeEnvironmentStatusResult' => [ 'type' => 'structure', 'members' => [ 'status' => [ 'shape' => 'EnvironmentStatus', ], 'message' => [ 'shape' => 'String', ], ], ], 'DescribeEnvironmentsRequest' => [ 'type' => 'structure', 'required' => [ 'environmentIds', ], 'members' => [ 'environmentIds' => [ 'shape' => 'BoundedEnvironmentIdList', ], ], ], 'DescribeEnvironmentsResult' => [ 'type' => 'structure', 'members' => [ 'environments' => [ 'shape' => 'EnvironmentList', ], ], ], 'Environment' => [ 'type' => 'structure', 'members' => [ 'id' => [ 'shape' => 'EnvironmentId', ], 'name' => [ 'shape' => 'EnvironmentName', ], 'description' => [ 'shape' => 'EnvironmentDescription', ], 'type' => [ 'shape' => 'EnvironmentType', ], 'arn' => [ 'shape' => 'String', ], 'ownerArn' => [ 'shape' => 'String', ], ], ], 'EnvironmentDescription' => [ 'type' => 'string', 'max' => 200, ], 'EnvironmentId' => [ 'type' => 'string', 'pattern' => '^[a-zA-Z0-9]{8,32}$', ], 'EnvironmentIdList' => [ 'type' => 'list', 'member' => [ 'shape' => 'EnvironmentId', ], ], 'EnvironmentList' => [ 'type' => 'list', 'member' => [ 'shape' => 'Environment', ], ], 'EnvironmentMember' => [ 'type' => 'structure', 'members' => [ 'permissions' => [ 'shape' => 'Permissions', ], 'userId' => [ 'shape' => 'String', ], 'userArn' => [ 'shape' => 'UserArn', ], 'environmentId' => [ 'shape' => 'EnvironmentId', ], 'lastAccess' => [ 'shape' => 'Timestamp', ], ], ], 'EnvironmentMembersList' => [ 'type' => 'list', 'member' => [ 'shape' => 'EnvironmentMember', ], ], 'EnvironmentName' => [ 'type' => 'string', 'max' => 60, 'min' => 1, ], 'EnvironmentStatus' => [ 'type' => 'string', 'enum' => [ 'error', 'creating', 'connecting', 'ready', 'stopping', 'stopped', 'deleting', ], ], 'EnvironmentType' => [ 'type' => 'string', 'enum' => [ 'ssh', 'ec2', ], ], 'ForbiddenException' => [ 'type' => 'structure', 'members' => [], 'exception' => true, ], 'InstanceType' => [ 'type' => 'string', 'max' => 20, 'min' => 5, 'pattern' => '^[a-z][1-9][.][a-z0-9]+$', ], 'InternalServerErrorException' => [ 'type' => 'structure', 'members' => [], 'exception' => true, 'fault' => true, ], 'LimitExceededException' => [ 'type' => 'structure', 'members' => [], 'exception' => true, ], 'ListEnvironmentsRequest' => [ 'type' => 'structure', 'members' => [ 'nextToken' => [ 'shape' => 'String', ], 'maxResults' => [ 'shape' => 'MaxResults', ], ], ], 'ListEnvironmentsResult' => [ 'type' => 'structure', 'members' => [ 'nextToken' => [ 'shape' => 'String', ], 'environmentIds' => [ 'shape' => 'EnvironmentIdList', ], ], ], 'MaxResults' => [ 'type' => 'integer', 'box' => true, 'max' => 25, 'min' => 0, ], 'MemberPermissions' => [ 'type' => 'string', 'enum' => [ 'read-write', 'read-only', ], ], 'NotFoundException' => [ 'type' => 'structure', 'members' => [], 'exception' => true, ], 'Permissions' => [ 'type' => 'string', 'enum' => [ 'owner', 'read-write', 'read-only', ], ], 'PermissionsList' => [ 'type' => 'list', 'member' => [ 'shape' => 'Permissions', ], ], 'String' => [ 'type' => 'string', ], 'SubnetId' => [ 'type' => 'string', 'max' => 30, 'min' => 5, ], 'Timestamp' => [ 'type' => 'timestamp', ], 'TooManyRequestsException' => [ 'type' => 'structure', 'members' => [], 'exception' => true, ], 'UpdateEnvironmentMembershipRequest' => [ 'type' => 'structure', 'required' => [ 'environmentId', 'userArn', 'permissions', ], 'members' => [ 'environmentId' => [ 'shape' => 'EnvironmentId', ], 'userArn' => [ 'shape' => 'UserArn', ], 'permissions' => [ 'shape' => 'MemberPermissions', ], ], ], 'UpdateEnvironmentMembershipResult' => [ 'type' => 'structure', 'members' => [ 'membership' => [ 'shape' => 'EnvironmentMember', ], ], ], 'UpdateEnvironmentRequest' => [ 'type' => 'structure', 'required' => [ 'environmentId', ], 'members' => [ 'environmentId' => [ 'shape' => 'EnvironmentId', ], 'name' => [ 'shape' => 'EnvironmentName', ], 'description' => [ 'shape' => 'EnvironmentDescription', ], ], ], 'UpdateEnvironmentResult' => [ 'type' => 'structure', 'members' => [], ], 'UserArn' => [ 'type' => 'string', 'pattern' => 'arn:aws:(iam|sts)::\\d+:\\S+', ], ],];
