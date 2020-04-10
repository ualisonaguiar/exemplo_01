node {
  stage("Main") {

    checkout scm

    docker.image('php:7.0-apache').inside("-e COMPOSER_HOME=/tmp/jenkins-workspace") {

   }

  }

  // Clean up workspace
  step([$class: 'WsCleanup'])

}
